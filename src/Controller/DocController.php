<?php

namespace App\Controller;

use App\Entity\Doc;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DocController extends AbstractController
{
    /**
     * @Route("/doc", name="doc")
     */

    public function document()
    {
        #Envoie du document
        $document = new Doc();
        $document->setDoc('docCvBoulanger.doc');

        $em = $this->getDoctrine()->getManager();

        $em->persist($document);

        $em->flush();

        return new Response('Nouveau document : ' . $document->getDoc());
    }
}
