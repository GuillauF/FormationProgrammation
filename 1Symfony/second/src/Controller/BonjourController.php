<?php

namespace App\Controller;

use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    #[Route('/bonjour', name: 'bonjour')]
    public function index(): Response
    {
        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
        ]);
    }

    #[Route('/formulairePremier', name: 'formulairePremier')]
    public function formulairePremier(\Symfony\Component\HttpFoundation\Request $request): Response
    {
        $valeur = 'test';
        if ($request->request->count()){
        $valeur = $request->request->get('champ');
        }
        return $this->render('bonjour/formulaire.twig', ['champ' => $valeur]);
    }
}
