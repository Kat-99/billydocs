<?php


namespace App\Controller;

use App\Entity\Files;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class AddFileController extends AbstractController
{

    public function addFile(Request $request)
    {
        $file = new Files();

        $user = $this->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy();

        $file->setUser($user);


        $form = $this->createFormBuilder($file)

            //title input
            ->add('title', TextType::class, [
            'required' => true,
            'label' => 'Titre',
            ])

            //docdate input
            ->add('docdate', DateType::class, [
                'required' => true,
                'label' => 'Date du',
            ])

            //label input
            ->add('label', TextType::class, [
                'required' => true,
                'label' => 'Label',
                'attr' => [
                    'placeholder' => 'ex: Electricité, Eau, Médecin...'
                ]
            ])

            //Upload
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





    }
}