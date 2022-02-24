<?php

namespace App\Controller;

use App\Entity\BandePassante;
use AppBundle\Form\BandePassanteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BandePassanteController extends AbstractController
{
    #[Route('/bande/passante', name: 'bande_passante')]
    public function Conversion(Request $request): Response
    {
        $resultat = '';
        $bandePassante = new BandePassante();
        $form = $this->createForm(BandePassanteType::class, $bandePassante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bandePassante = $form->getData();
            $valeur = $bandePassante->getValeur();
            $unite1 = $bandePassante->getUnite1();
            $unite2 = $bandePassante->getUnite2();

            $ratios = array("b/s" => 1, "kb/s" => 1 / 1e3, "Mb/s" => 1 / 1e6, "Gb/s" => 1 / 1e9, "o/s" => 1 / 8, "ko/s" => 1 / 8e3, "Mo/s" => 1 / 8e6, "Go/s" => 1 / 8e9);

            $resultat = number_format($valeur * ($ratios[$unite2] / $ratios[$unite1]), 2, '.', ' ');

        }
         return $this->render('bande_passante/index.html.twig', [
             'form' => $form->createView(),
             'resultat' => $resultat

             ]);
    }
}
