<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(JoueurRepository $joueurRepository): Response
    {
        $joueur = $joueurRepository->findAll();
return $this->redirectToRoute('app_show_actualite');
//        return $this->render('search/index.html.twig', [
//            'controller_name' => 'SearchController',
//            'joueur'=>$joueur
//        ]);
    }
}
