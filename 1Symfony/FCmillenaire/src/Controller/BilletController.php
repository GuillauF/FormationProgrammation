<?php

namespace App\Controller;

use App\Entity\ReservationBillet;
use App\Entity\Store;
use App\Form\StoreFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilletController extends AbstractController
{
    #[Route('/billet', name: 'app_billet')]
    public function index(): Response
    {
        return $this->render('billet/index.html.twig', [
            'controller_name' => 'BilletController',
        ]);
    }


    #[Route('/store', name: 'app_store')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation_billet = new ReservationBillet();
        $form = $this->createForm(StoreFormType::class, $reservation_billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($reservation_billet);
            $entityManager->flush();


        }
        return $this->render('store/index.html.twig', [
            'store' => $form->createView(),
        ]);
    }

}
