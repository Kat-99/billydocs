<?php


namespace App\Controller;

use App\Entity\Files;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;

class UpdateFile extends AbstractController
{
    use HelperTrait;

    /**
     * @param Files $file
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     * @Route("/file/{id}/edit", name="editdocument")
     */
    public function update(Files $file, Request $request, EntityManagerInterface $em)
    {

       // $file->setFileName(
       //    new Files($this->getParameter('files_directory').'/'.$file->getFileName())
        // );


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
                'label' => 'Modifier'
            ])

            // Creates form
            ->getForm();

        //Manage received data
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            # Sauvegarde en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();

            # Notification
            $this->addFlash('notice', 'Fichier mis à jour');

            # Redirection on current page
            return $this->redirectToRoute('editdocument', [
                'id' => $file->getId(),
            ]);

        }

        return $this->render('form/update.html.twig', [
            'update' => $form->createView(),
        ]);
    }
}