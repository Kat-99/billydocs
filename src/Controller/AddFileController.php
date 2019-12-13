<?php


namespace App\Controller;

use App\Entity\Files;
use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class AddFileController extends AbstractController
{
    use HelperTrait;

    /**
     * @param Request $request
     * @Route("/addfile", name="addfile")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return Response
     */
    public function addFile(Request $request)
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
                    'placeholder' => 'ex: Electricité, Eau, Médecin...'
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
                'label' => 'Ajouter un fichier'
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
                $newFileName = $this->slugify($file->getTitle()) . '-' . uniqid().'.'.$docFile->guessExtension();
                $file->setFileType($docFile->getMimeType());
                //Laisser à symphony gérer le type de l'image, jpeg, png etc...

                // Move the file to the directory where brochures are stored
                try {
                    $docFile->move(
                        $this->getParameter('files_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $file->setFileName($newFileName);
            }

            # Sauvegarde en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();

            # Notification
            $this->addFlash('notice', 'Fichier ajouté');

        }

        # Transmission du Formulaire à la vue
        return $this->render('form/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

}