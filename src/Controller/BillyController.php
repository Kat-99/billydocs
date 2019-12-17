<?php

namespace App\Controller;

use App\Entity\Files;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BillyController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function index(Request $request)
    {

        if(!$this->getUser()) {
            return $this->redirectToRoute('user_register');
        }

        $order = $request->query->get('sort') ?? 'id';

        $filesRepository = $this->getDoctrine()->getRepository(Files::class);
        $files = $this->getUser() ? $filesRepository->findBy(['user' => $this->getUser()], [ $order => 'DESC' ]) : [];

        return $this->render('home/home.html.twig', [
            'files' => array_reverse($files)
        ]);
    }

    /**
     * @Route("/contact.html", name="contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
