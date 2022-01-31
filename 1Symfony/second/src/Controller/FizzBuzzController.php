<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    #[Route('/fizz/buzz', name: 'fizz_buzz')]
    public function fizzbuzz(Request $request): Response
    {
        $valeurMax = '';
        $resultat = '';

        if ($request->request->count()) {
            $valeurMax = $request->request->get('valueMax');
                for ($i = 0; $i <= $valeurMax; $i++) {
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        $resultat = "FizzBuzz";
                    } else if ($i % 3 == 0) {
                        //sinon si le nombre est divisible par 3
                        //on affiche Fizz dans la console
                        $resultat = "Fizz";
                    } else if ($i % 5 == 0) {
                        //sinon si le nombre est divisible par 5
                        //on affiche Buzz dans la console
                        $resultat = "Buzz";
                    } else {
                        //si le nombre n'est ni divisible par 3 ou 5
                        //on finit par afficher ce nombre
                        $resultat = $i;
                    }
                }
        }
        return $this->render('fizz_buzz/index.html.twig', [
            'valueMax' => $valeurMax,
            'resultat' => $resultat
        ]);
    }
}