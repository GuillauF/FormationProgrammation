<?php

namespace App\Controller\Admin\Annonces;

use App\Entity\Prix;
use App\Form\PrixType;
use App\Repository\PrixRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/prix')]
class PrixController extends AbstractController
{
    #[Route('/', name: 'prix_index', methods: ['GET'])]
    public function index(PrixRepository $prixRepository): Response
    {
        return $this->render('prix/index.html.twig', [
            'prixes' => $prixRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'prix_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $prix = new Prix();
        $form = $this->createForm(PrixType::class, $prix);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($prix);
            $entityManager->flush();

            return $this->redirectToRoute('prix_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('prix/new.html.twig', [
            'prix' => $prix,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'prix_show', methods: ['GET'])]
    public function show(Prix $prix): Response
    {
        return $this->render('prix/show.html.twig', [
            'prix' => $prix,
        ]);
    }

    #[Route('/{id}/edit', name: 'prix_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Prix $prix, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PrixType::class, $prix);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('prix_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('prix/edit.html.twig', [
            'prix' => $prix,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'prix_delete', methods: ['POST'])]
    public function delete(Request $request, Prix $prix, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prix->getId(), $request->request->get('_token'))) {
            $entityManager->remove($prix);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prix_index', [], Response::HTTP_SEE_OTHER);
    }
}
