<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuDesController extends AbstractController
{
    #[Route('/jeu/des', name: 'jeu_des')]
    public function jeuDes(Request $request) : Response
    {
        $des = '';
        $total = 0;

        if($request->request->count()) {
            $des = $request->request->get('dice');


            $diceList = explode("+", mb_strtoupper($des));

            foreach ($diceList as $die) {
                //on sépare le nombre de lancers du nombre de faces
                $dieValues = explode("D", $die);
                //si on a plusieurs valeurs, c'est qu'il s'agit bien d'un dè et non d'une valeur unique
                if (count($dieValues) > 1) {
                    //dans ce cas on lance autant de dès que nécessaire

                    for ($i = 0; $i < $dieValues[0]; $i++) {
                        $total += rand(1, $dieValues[1]);
                        //dd($total);
                    }
                } else {
                    $total += $dieValues[0];
                }
            }
        }
        return $this->render('jeu_des/index.html.twig', [
            'champ' => $des,
            'resultat' => $total
        ]);
    }
}
