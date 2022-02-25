<?php

namespace App\Controller;

use App\Entity\NombreAleat;
use App\Form\NombreAleatType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NombreAleatController extends AbstractController
{
    #[Route('/nombre/aleat', name: 'nombre_aleat')]
    public function Random(Request $request): Response
    {
        $resultat = '';
        $nbAleat = new NombreAleat();
        $form = $this->createForm(NombreAleatType::class, $nbAleat);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $volumeCone = $form->getData();
            $min = $volumeCone->getMin();
            $max = $volumeCone->getMax();
            $nbValeurs = $volumeCone->getNbValeurs();

            if (0 < $nbValeurs) {
                // on prépare une liste html
                $html = " ";
                //on répète autant de fois que nécessaire
                for ($i = 0; $i < $nbValeurs; $i++) {
                    //la génération des nombres aléatoires
                    $html .= " " . rand($min, $max) . " ";
                }
                //on ferme notre liste
                $resultat = $html.' ';
            } else {
                //si le nombre de répétitions est inférieur à 0 on affiche un message
                $resultat = "Le nombre de valeurs doit être > à 0";
            }

        }
        return $this->render('facture_elec/index.html.twig', [
            'form' => $form->createView(),
            'resultat' => $resultat
        ]);
    }
}
