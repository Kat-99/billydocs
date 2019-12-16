<?php


namespace App\Controller;

use App\Entity\Files;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DeleteFileController extends AbstractController
{
    /**
     * @param Files $file
     * @param EntityManagerInterface $em
     * @return Response
     * @Route("/{id}/file-remove", name="delete", requirements={"id":"\d+"})
     */
    public function delete(Files $file, EntityManagerInterface $em) {

        $em->remove($file);
        $em->flush();

        return $this->redirectToRoute('delete', [
            'id' => $file->getId(),
        ]);
    }
}