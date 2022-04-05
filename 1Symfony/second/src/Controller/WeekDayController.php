<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeekDayController extends AbstractController
{
    #[Route('/week/day', name: 'week_day')]
    public function weekDay(Request $request): Response
    {
        $day = '';
        $month = '';
        $year = '';
        $weekday = '';
        $resultat = '';

        if($request->request->count()) {
            $day = $request->request->get('day');
            $month = $request->request->get('month');
            $year = $request->request->get('year');

//on effectue le calcul trouvé sur internet
            $c = intdiv(14 - $month, 12);
            $a = $year - $c;
            $m = $month + 12 * $c - 2;
            $weekday = ($day + $a + intdiv($a, 4) - intdiv($a, 100) + intdiv($a, 400) + intdiv((31 * $m), 12)) % 7;
//on prépare un tableau de jours en "toutes lettres"
            $equivalent = [0 => "Dimanche", 1 =>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi"];
            $resultat = $equivalent[$weekday];
        }
        return $this->render('week_day/index.html.twig', [
            'day' => $day,
            'month' => $month,
            'year' => $year,
            'weekday' => $weekday,
            'equivalent' => $resultat
        ]);
    }
}
