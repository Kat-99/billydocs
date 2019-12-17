<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Files;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortByController extends AbstractController
{

    /**
     * @Route("/{sort}", name="sortby", methods={"GET"})
     * @return Response
     */
    public function order($sort)
    {
        {
            $order = $this->getDoctrine()
                ->getRepository(Files::class)
                ->findAll(['sort' => $sort]);

        }
        return $this->render('home/home.html.twig', [
        'order' => $order
            ]);
    }
}
