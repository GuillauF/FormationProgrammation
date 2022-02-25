<?php

namespace App\Controller;

use App\Entity\JeuDes;
use AppBundle\Form\JeuDes1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuDesController extends AbstractController
{
    #[Route('/jeu/des', name: 'jeu_des')]
    public function index(Request $request): Response
    {
        $total = 0;
        $jeuDes = new JeuDes();
        $form = $this->createForm(JeuDes1Type::class, $jeuDes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bandePassante = $form->getData();
            $valeurLancer = $bandePassante->getValeurLancer();

            $diceList = explode("+", mb_strtoupper($valeurLancer));
            //on se prépare à compter


            foreach ($diceList as $die) {
                //on sépare le nombre de lancers du nombre de faces
                $dieValues = explode("D", $die);
                //si on a plusieurs valeurs, c'est qu'il s'agit bien d'un dè et non d'une valeur unique
                if (count($dieValues) > 1) {
                    //dans ce cas on lance autant de dès que nécessaire
                    for ($i = 0; $i < $dieValues[0]; $i++) {
                        $total += rand(1, $dieValues[1]);
                    }
                } else {
                    $total += $dieValues[0];
                }
            }

        }
        return $this->render('jeu_des/index.html.twig', [
            'form' => $form->createView(),
            'resultat' => $total
    ]);

    }
}
