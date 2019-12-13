<?php

namespace App\Controller;

use App\Entity\Doc;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @return Response
     */
  
    public function index()
    {
        #Récupération des documents
        $document = $this->getDoctrine()
            ->getRepository(Doc::class)
            ->findAll();

        #Transmission à la vue
        return $this->render('home/home.html.twig', [
            'document' =>$document
        ]);

    }

    /**
     * @Route("/{label}", name="default_category", methods={"GET"})
     * @return Response
     */

    public function category($label)
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['label' => $label]);

        $document = $category->getDoc();

        # envoie des données à la vue pour affichage
        return $this->render('home/home.html.twig' , [
            'document' => $document,
            'category' => $category
        ]);
    }

    /**
     * @Route("/{categorie}/{label}_{id}.html", name="default_document", methods={"GET"})
     * @param Doc $document
     * @return Response
     */
    public function document(Doc $document)
    {
        return $this->render('home/home.html.twig' , [
            'document' =>$document
        ]);
    }

    public function menu()
    {
        #Récupération des catégories
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        #Transmission à la vue
        return $this->render('components/sub-nav.html.twig' , [
            'categories' => $categories
        ]);
    }

}
