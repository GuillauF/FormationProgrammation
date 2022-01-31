<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactureElecController extends AbstractController
{
    #[Route('/facture/elec', name: 'facture_elec')]
    public function facture(Request $request): Response
    {
        $resultat = '';

        $Base = ["3kVA" => 0.1558, "6kVA" => 0.1558, "9kVA" => 0.1605, "12kVA" => 0.1605, "15kVA" => 0.1605, "18kVA" => 0.1605];
        $HC = ["3kVA" => 0.1558, "6kVA" => 0.1360, "9kVA" => 0.1360, "12kVA" => 0.1360, "15kVA" => 0.1360, "18kVA" => 0.1360];
        $HP = ["3kVA" => 0.1558, "6kVA" => 0.1821, "9kVA" => 0.1821, "12kVA" => 0.1821, "15kVA" => 0.1821, "18kVA" => 0.1821];

        if($request->request->count()) {
            $kWh = $request->request->get('kWh');
            $puissance = $request->request->get('puissance');

            if ($request->request->get('HP') && $request->request->get('HC')) {
                $resultat = "Impossible d'avoir des tarifs HC et HP en même temps";
            } else {
                if ($request->request->get('HC')){
                    $resultat = "En heure creuse ça coûte :" . $kWh * ($HC[$puissance]) . "€";
                } else {
                    if ($request->request->get('HP')){
                        $resultat = "En heure pleine ça coûte :" . $kWh * ($HP[$puissance]) . "€";
                    } else {
                        $resultat = $kWh * ($Base[$puissance]);
                    }
                }
            }
        }
        return $this->render('facture_elec/index.html.twig', [
            'resultat' => $resultat,
        ]);
    }
}
