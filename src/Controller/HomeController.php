<?php

namespace App\Controller;

use App\Entity\Files;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        if(!$this->getUser()) {
            return $this->redirectToRoute('user_register');
        }

        $filesRepository = $this->getDoctrine()->getRepository(Files::class);
        $files = $this->getUser() ? $filesRepository->findByUser($this->getUser()) : [];

        return $this->render('home/home.html.twig', [
            'files' => array_reverse($files)
        ]);
    }
}
