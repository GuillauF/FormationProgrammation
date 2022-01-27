<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuDesController extends AbstractController
{
    #[Route('/d/jeu/des', name: 'jeu_des')]
    public function index(): Response
    {
        return $this->render('jeu_des/index.html.twig', [
            'controller_name' => 'JeuDesController',
        ]);
    }
}
