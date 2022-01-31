<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculateController extends AbstractController
{
    #[Route('/calculate', name: 'calculate')]
    public function calcul(Request $request): Response
    {
        $resultat = '';

        if($request->request->count()) {
            $premierNombre = $request->request->get('premierNombre');
            $operateur = $request->request->get('operateur');
            $deuxiemeNombre = $request->request->get('deuxiemeNombre');

            if ("add" == $operateur) {
                $resultat = $premierNombre + $deuxiemeNombre;
            } else if ("sub" == $operateur) {
                $resultat = $premierNombre - $deuxiemeNombre;
            } else if ("mul" == $operateur) {
                $resultat = $premierNombre * $deuxiemeNombre;
            } else if (("div" == $operateur) && (0 == $deuxiemeNombre)){
                $resultat = "Erreur division par zéro";
            } else {
                $resultat = $premierNombre / $deuxiemeNombre;
            }
        }
        return $this->render('calculate/index.html.twig', [

            'resultat' => $resultat,
        ]);
    }
}
