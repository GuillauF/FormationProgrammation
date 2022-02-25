<?php

namespace App\Controller;

use App\Entity\JourSemaine;
use App\Form\JourSemaineType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JourSemaineController extends AbstractController
{
    #[Route('/jour/semaine', name: 'jour_semaine')]
    public function GetWeekDay(Request $request): Response
    {
        $resultat = '';
        $jourSemaine = new JourSemaine();
        $form = $this->createForm(JourSemaineType::class, $jourSemaine);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jourSemaine = $form->getData();
            $jour = $jourSemaine->getJour();
            $mois = $jourSemaine->getMois();
            $annee = $jourSemaine->getAnnee();

            $jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

//on effectue le calcul trouvé sur internet
            $c = intdiv(14 - $mois, 12);
            $a = $annee - $c;
            $m = $mois + 12 * $c - 2;
            $j = ($jour + $a + intdiv($a, 4) - intdiv($a, 100) + intdiv($a, 400) + intdiv((31 * $m), 12)) % 7;
//on prépare un tableau de jours en "toutes lettres"
//on fait correspondre le résultat du calcul de 0 à 6 à notre tableau de jours
            $resultat = $jours[$j];

        }
            return $this->render('facture_elec/index.html.twig', [
                'form' => $form->createView(),
                'resultat' => $resultat
            ]);
    }
}
