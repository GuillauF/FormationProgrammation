<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowActualiteController extends AbstractController
{
    #[Route('/showactualite', name: 'app_show_actualite')]
    public function index(): Response
    {
        return $this->render('show_actualite/index.html.twig', [
            'controller_name' => 'ShowActualiteController',
        ]);
    }
}
