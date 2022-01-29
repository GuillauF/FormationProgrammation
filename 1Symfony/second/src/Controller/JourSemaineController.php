<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JourSemaineController extends AbstractController
{
    #[Route('/jour/semaine', name: 'jour_semaine')]
    public function index(): Response
    {
        return $this->render('jour_semaine/index.html.twig', [
            'controller_name' => 'JourSemaineController',
        ]);
    }
}
