<?php

namespace App\Controller;

use App\Entity\Calculatrice;
use AppBundle\Form\Calculatrice1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatriceController extends AbstractController
{

    #[Route('/calculatrice', name: 'calculatrice')]
    public function Calculate(Request $request) : Response
    {
        $resultat = '';
        $calculatrice = new Calculatrice();
        $form = $this->createForm(Calculatrice1Type::class, $calculatrice);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculatrice = $form->getData();
            $premierNombre = $calculatrice->getPremierNombre();
            $deuxiemeNombre = $calculatrice->getDeuxiemeNombre();
            $operateur = $calculatrice->getOperateur();

            switch ($operateur)
            {
                case ("add" == $operateur);
                $resultat = $premierNombre + $deuxiemeNombre;
                    break;
                case ("sub" == $operateur);
                    $resultat = $premierNombre - $deuxiemeNombre;
                    break;
                case ("mul" == $operateur);
                    $resultat = $premierNombre * $deuxiemeNombre;
                    break;
                case ("div" == $operateur);
                    $resultat = $premierNombre / $deuxiemeNombre;
                    break;
            }
        }
            return $this->render('calculatrice/index.html.twig', [
                'form' => $form->createView(),
                'resultat' => $resultat
            ]);
    }
}
