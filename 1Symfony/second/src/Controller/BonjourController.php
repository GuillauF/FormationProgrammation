<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{

    /**
     * Route
     *        '/versionreponse' ça c'est le chemin attendu dans l'url
     *        name: 'versionreponse' ça c'est l'identifiant unique pour le routing
     * @return Response
     */
    #[Route('/', name: 'accueil')]
    public function versionResponse(): Response
    {
        return new Response('Mon accueil');
    }

    /**
     * $this->render(
     *   'nomdutemplate' charge le template (nomdutemplate)
     *   ['cle' => 'valeur']  on transmet à notre template des clés / valeurs
     *
     * @return Response
     */
    #[Route('/versionrender', name: 'versionrender')]
    public function versionRender(): Response
    {
        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
        ]);
    }

    /**
     * $this->render(
     *   'nomdutemplate' charge le template (nomdutemplate)
     *   ['cle' => 'valeur']  on transmet à notre template des clés / valeurs
     *
     * @return Response
     */
    #[Route('/exempletwig', name: 'exempletwig')]
    public function exempletwig(): Response
    {
        return $this->render('bonjour/exempletwig.html.twig', [
            'controller_name' => 'exemple twig',
            'cle' => 'valeur',
            'alkas' => 'formation web'
        ]);
    }


    #[Route('/formulaire/premier', name:'formulairePremier')]
    public function formulairePremier(Request $request) : Response
    {
        $valeur = 'test';

        //dd($request);
        if($request->request->count()) {
            $valeur = $request->request->get('champ');
        }

        return $this->render('bonjour/formulaire.twig', [
            'champ' => $valeur
        ]);
    }

}