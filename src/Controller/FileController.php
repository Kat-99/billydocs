<?php


namespace App\Controller;

use App\Entity\Files;
use App\Entity\User;
use App\Service\UploaderHelper;
use Doctrine\ORM\EntityManagerInterface;
use League\Flysystem\FilesystemInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class FileController
 * @package App\Controller
 * @Route("/fichier")
 */
class FileController extends AbstractController
{
    use HelperTrait;

    /**
     * @param Request $request
     * @param UploaderHelper $uploaderHelper
     * @return Response
     * @throws \Exception
     * @Route("/charger-un-fichier.html", name="addfile")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function addFile(Request $request, UploaderHelper $uploaderHelper)
    {
        $file = new Files();
        $user = $this->getUser();
        $file->setUser($user);

        $form = $this->createFormBuilder($file)

            //title input
            ->add('title', TextType::class, [
            'required' => true,
            'label' => 'Titre',
            ])

            //docdate input
            ->add('docdate', DateType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date du',
                'attr' => [
                    'placeholder' => 'JJ/MM/YYYY'
                ]
            ])

            //label input
            ->add('label', TextType::class, [
                'required' => true,
                'label' => 'Label',
                'attr' => [
                    'placeholder' => 'ex: électricité, eau, médecin...'
                ]
            ])

            //upload
            ->add('filename', FileType::class, [
                'required' => true,
                'label' => 'Fichier',
                'attr' => [
                    'class' => 'dropify'
                ]
            ])


            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter un fichier',
                'attr' => [
                    'class' => 'btn-lg'
                ]
            ])

            // Creates form
            ->getForm();

        //Manage received data
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $docFile */
            $docFile = $form['filename']->getData();

            if ($docFile) {

                # Upload file privately
                $file->setFileName($uploaderHelper->uploadFile($docFile));
                $file->setFileType($docFile->getMimeType());

            }

            # Sauvegarde en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();

            # Notification
            $this->addFlash('notice', 'Fichier ajouté');

            return $this->redirectToRoute('home');

        }

        # Transmission du Formulaire à la vue
        return $this->render('form/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Files $file
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     * @Route("/mettre-a-jour-{id}.html", name="editdocument")
     */
    public function update(
        Files $file,
        Request $request,
        EntityManagerInterface $em)
    {

        $filename = $file->getFileName();
        $file->setFileName(
           new File($this->getParameter('files_directory') . '/' . $file->getFileName())
        );

        $form = $this->createFormBuilder($file)

            //title input
            ->add('title', TextType::class, [
                'required' => true,
                'label' => 'Titre',
            ])

            //docdate input
            ->add('docdate', DateType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date du',
                'attr' => [
                    'placeholder' => 'JJ/MM/YYYY'
                ]
            ])

            //label input
            ->add('label', TextType::class, [
                'required' => true,
                'label' => 'Label',
                'attr' => [
                    'placeholder' => 'ex: Electricité, Eau, Médecin...'
                ]
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Modifier'
            ])

            // Creates form
            ->getForm();

        //Manage received data
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $file->setFileName($filename);

            # Sauvegarde en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();

            # Notification
            $this->addFlash('notice', 'Fichier mis à jour');

            # Redirection on current page
            return $this->redirectToRoute('home');

        }

        return $this->render('form/update.html.twig', [
            'update' => $form->createView(),
        ]);
    }

    /**
     * @param Files $file
     * @param UploaderHelper $uploaderHelper
     * @param EntityManagerInterface $em
     * @return Response
     * @throws \Exception
     * @Route("/supprimer-{id}.html", name="delete", requirements={"id":"\d+"})
     * @Security("file.isOwner(user)")
     */
    public function delete(Files $file, UploaderHelper $uploaderHelper, EntityManagerInterface $em) {

        # Remove file from FS
        $uploaderHelper->deleteFile($file->getFileName());

        # Remove file from DB
        $em->remove($file);
        $em->flush();

        # Flash Notification
        $this->addFlash('notice', 'Votre fichier a bien été supprimé.');

        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/telecharger-{id}", name="file_download", methods={"GET"})
     * @Security("files.isOwner(user)")
     * @param Files $files
     * @param UploaderHelper $uploaderHelper
     * @return StreamedResponse
     */
    public function download(Files $files, UploaderHelper $uploaderHelper)
    {

        $response = new StreamedResponse(function() use ($files, $uploaderHelper) {

            $outputStream = fopen('php://output', 'wb');
            $filesStream = $uploaderHelper->readStream($files->getFileName());
            stream_copy_to_stream($filesStream, $outputStream);
        });

        $response->headers->set('Content-Type', $files->getFileType());
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            $files->getFileName()
        );
        $response->headers->set('Content-Disposition', $disposition);

        return $response;

    }

    /**
     * @Route("/consulter-{id}", name="file_read", methods={"GET"})
     * @Security("files.isOwner(user)")
     * @param Files $files
     * @param UploaderHelper $uploaderHelper
     * @return StreamedResponse
     */
    public function read(Files $files, UploaderHelper $uploaderHelper)
    {

        $response = new StreamedResponse(function() use ($files, $uploaderHelper) {

            $outputStream = fopen('php://output', 'wb');
            $filesStream = $uploaderHelper->readStream($files->getFileName());
            stream_copy_to_stream($filesStream, $outputStream);
        });

        $response->headers->set('Content-Type', $files->getFileType());

        return $response;

    }

}