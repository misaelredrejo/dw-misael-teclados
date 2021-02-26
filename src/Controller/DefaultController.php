<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Teclado;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $teclados = $this->getDoctrine()
        ->getRepository(Teclado::class)
        ->findAllAndSortByName();
        return $this->render('default/index.html.twig', [
            'teclados' => $teclados,
        ]);
    }
}
