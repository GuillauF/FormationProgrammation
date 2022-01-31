<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BandwidthController extends AbstractController
{
    #[Route('/bandwidth', name: 'bandwidth')]
    public function bandePassante(Request $request): Response
    {
        $resultat = '';
        $value = '';

        if($request->request->count()) {
            $value = $request->request->get('value');
            $unit1 = $request->request->get('unit1');
            $unit2 = $request->request->get('unit2');

            $ratios = ["b/s" => 1, "kb/s" => 1 / 1e3, "Mb/s" => 1 / 1e6, "Gb/s" => 1 / 1e9, "o/s" => 1 / 8, "ko/s" => 1 / 8e3, "Mo/s" => 1 / 8e6, "Go/s" => 1 / 8e9];

            $resultat = number_format($value * ($ratios[$unit2] / $ratios[$unit1]), 2, '.', ' ');
        }
        return $this->render('bandwidth/index.html.twig', [
            'resultat' => $resultat,
            'valeur' => $value
        ]);
    }
}
