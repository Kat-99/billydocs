<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormulasController extends AbstractController
{
    /**
     * @Route("/formules.html", name="formulas")
     */
    public function index()
    {
        return $this->render('formulas/subscriptionsuccess.html.twig', [
            'controller_name' => 'FormulasController',
        ]);
    }
}
