<?php

namespace App\Controller;

use App\Entity\FactureElec;
use AppBundle\Form\FactureElecType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactureElecController extends AbstractController
{
    #[Route('/facture/elec', name: 'facture_elec')]
    public function Consommation(Request $request): Response
    {
        $resultat = '';
        $factureElec = new FactureElec();
        $form = $this->createForm(FactureElecType::class, $factureElec);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $factureElec = $form->getData();
            $consommation = $factureElec->getConsommation();
            $puissance = $factureElec->getPuissance();


                $Base = array("3kVA" => 0.1558, "6kVA" => 0.1558, "9kVA" => 0.1605, "12kVA" => 0.1605, "15kVA" => 0.1605, "18kVA" => 0.1605);
                $HC = ["3kVA" => 0.1558, "6kVA" => 0.1360, "9kVA" => 0.1360, "12kVA" => 0.1360, "15kVA" => 0.1360, "18kVA" => 0.1360];
                $HP = ["3kVA" => 0.1558, "6kVA" => 0.1821, "9kVA" => 0.1821, "12kVA" => 0.1821, "15kVA" => 0.1821, "18kVA" => 0.1821];

            switch ($puissance)
            {
                case (true === $form['HC']->getData());
                    $resultat = $consommation * ($HC[$puissance]);
                    break;
                case (true === $form['HP']->getData());
                    $resultat = $consommation * ($HP[$puissance]);
                    break;
                case (false === $form['HC']->getData() && (false === $form['HP']->getData()));
                    $resultat = $consommation * ($Base[$puissance]);
                    break;
                case (true === $form['HC']->getData() && (true === $form['HP']->getData()));
                    $resultat = "Impossible d'avoir des tarifs HC et HP en même temps";
                    break;
            }

        }

        return $this->render('facture_elec/index.html.twig', [
            'form' => $form->createView(),
            'resultat' => $resultat
        ]);
    }
}
