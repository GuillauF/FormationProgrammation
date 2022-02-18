<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/jss')]
class JsController extends AbstractController
{
    #[Route('/', name: 'aideMemo')]
    public function aideMemo(): Response
    {
        return $this->render('js/aideMemo.twig', [
            'controller_name' => 'JsController',
        ]);
    }

    #[Route('/premierExo', name: 'premierExo')]
    public function premierExo(): Response
    {
        return $this->render('js/premierExo.twig');
    }

    #[Route('/chifoumi', name: 'chifoumi')]
    public function chifoumi(): Response
    {
        return $this->render('js/chifoumi.twig');
    }
}