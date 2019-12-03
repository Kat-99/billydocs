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

        //Manage received datas
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $docFile */
            $docFile = $form['filename']->getData();

            if ($docFile) {
                $newFileName = $this->slugify($file->getTitle()) . '-' . uniqid().'.'.$docFile->guessExtension();
                //Laisser à symphony gérer le type de l'image, jpeg, png etc...

                // Move the file to the directory where brochures are stored
                try {
                    $docFile->move(
                        $this->getParameter('articles_directory'),
                        $newFileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $article->setImage($newFilename);
            }

            # Génération de l'alias de l'article
            $article->setAlias( $this->slugify($article->getTitle()));

            # Sauvegarde en BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            # Notification
            $this->addFlash('notice', 'Félicitations votre article est en ligne !');

            # Redirection
            return $this->redirectToRoute('default_article', [
                'categorie' => $article->getCategory()->getAlias(),
                'alias' => $article->getAlias(),
                'id' => $article->getId()
            ]);

        }





    }
}