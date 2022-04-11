<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JoueurController extends AbstractController
{
    #[Route('/joueur', name: 'app_joueur')]
    public function index(JoueurRepository $joueurRepository): Response
    {
        $genre = $joueurRepository->findBy(['genre' => 'male'])
      ;

        return $this->render('joueur/index.html.twig', [
            'controller_name' => 'JoueurController',
            'genre' => $genre
        ]);
    }


}
