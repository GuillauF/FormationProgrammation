<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomNumberController extends AbstractController
{
    #[Route('/random/number', name: 'random_number')]
    public function random(Request $request): Response
    {
        $nombreValeurs = '';
        $min = '';
        $max = '';
        $resultat = '';

            if ($request->request->count()) {
                $min = $request->request->get('min');
                $max = $request->request->get('max');
                $nombreValeurs = $request->request->get('nbvalues');

                if (0 < $nombreValeurs) {
                    // on prépare une liste html
                    $html = " ";
                    //on répète autant de fois que nécessaire
                    for ($i = 0; $i < $nombreValeurs; $i++) {
                        //la génération des nombres aléatoires
                        $html .= " " . rand($min, $max) . " ";
                        //on ferme notre liste
                        $resultat = $html . ' ';
                    }
                }
                else{
                    $resultat = "Merci de rentrer un nombre de valeurs supérieur à 0 ! ";
                }
            }
        return $this->render('random_number/index.html.twig', [
            'min' => $min,
            'max' => $max,
            'nbvalues' => $nombreValeurs,
            'resultat' => $resultat
        ]);
    }
}
