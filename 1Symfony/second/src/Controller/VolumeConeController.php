<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VolumeConeController extends AbstractController
{
    #[Route('/volume/cone', name: 'volume_cone')]
    public function cone(Request $request): Response
    {
        $radius = '';
        $height = '';
        $volume = '';
        $resultat = '';

        if($request->request->count()) {
            $radius = $request->request->get('radius');
            $height = $request->request->get('height');

            $volume = (pi() * ($radius * $radius) * $height) / 3;

// si la case pour arrondir le résultat est cochée
            if ($request->request->get('round')) {
                // alors renvoie la valeur arrondie
                 $resultat = round($volume);
            } else {
                // sinon renvoie le résultat complet
                 $resultat = $volume;
            }
        }
        return $this->render('volume_cone/index.html.twig', [
            'radius' => $radius,
            'height' => $height,
            'volume' => $volume,
            'resultat' => $resultat
        ]);
    }
}
