<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends AbstractController
{
    #[Route('/actualite', name: 'actualite')]
    public function actualite(JoueurRepository $joueurRepository, EntityManagerInterface $em): Response
    {
        $joueurs = $joueurRepository->findBy(['genre'=>'male'], [], 11);
//        $joueurs = new Joueur;
//
//        $joueurs ->setName('Beer')
//            ->setSurname('Eric')
//            ->setMail('EricBeer@gmail.com');

//        $em->persist($joueurs);

        $em->flush();


        return $this->render('actualite/index.html.twig', [
            'controller_name' => 'ActualiteController',
            'joueur' => $joueurs,
        ]);

    }


}

