<?php

namespace App\Controller\Admin;

use App\Entity\Joueur;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/homepage', name: 'app_home_page')]
    public function index(EntityManagerInterface $em,JoueurRepository $joueurRepository): Response
    {
        $joueur = new Joueur;

        $joueur ->setName('Beer')
            ->setSurname('Eric')
            ->setMail('EricBeer@gmail.com');

        $em->persist($joueur);

        $em->flush();

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
}
