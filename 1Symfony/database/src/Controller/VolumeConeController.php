<?php

namespace App\Controller;

use App\Entity\VolumeCone;
use App\Form\VolumeConeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VolumeConeController extends AbstractController
{
    #[Route('/volume/cone', name: 'volume_cone')]
    public function CalculateVolume(Request $request): Response
    {
        $resultat = '';
        $volumeCone = new VolumeCone();
        $form = $this->createForm(VolumeConeType::class, $volumeCone);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $volumeCone = $form->getData();
            $rayon = $volumeCone->getRayon();
            $hauteur = $volumeCone->getHauteur();

            $volume = (pi() * ($rayon * $rayon) * $hauteur) / 3;

        if (true === $form['arrondi']->getData()){
                // alors renvoie la valeur arrondie
                $resultat = "La valeur arrondie est : ".round($volume);
            } else {
                // sinon renvoie le résultat complet
                $resultat = "Le nombre decimal est : ".$volume;
            }

        }
            return $this->render('facture_elec/index.html.twig', [
                'form' => $form->createView(),
                'resultat' => $resultat
            ]);
    }
}
