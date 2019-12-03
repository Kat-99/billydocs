<?php


namespace App\Controller;

use App\Entity\Files;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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








    }
}