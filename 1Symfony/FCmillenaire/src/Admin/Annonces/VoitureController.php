<?php

namespace App\Controller\Admin\Annonces;

use App\Entity\Images;
use App\Entity\Voiture;
use App\Form\VoitureType;
use App\Repository\VoitureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/voiture')]
class VoitureController extends AbstractController
{
    #[Route('/', name: 'voiture_index', methods: ['GET'])]
    public function index(VoitureRepository $voitureRepository): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_USER')) {
            throw new \Exception("Seuls les admin/utilisateurs peuvent voir cette page");
        }
        return $this->render('voiture/index.html.twig', [
            'voitures' => $voitureRepository->findAll(),
        ]);
    }

    #[Route('/exo', name: 'exo')]
    public function exo(EntityManagerInterface $entityManager): Response
    {
        $voiture = new Voiture();
        $voiture->setNom("V1");
        $voiture2 = new Voiture();
        $voiture2->setNom("V2");
        $voiture3 = new Voiture();
        $voiture3->setNom("V3");

        $entityManager->persist($voiture);
        $entityManager->persist($voiture2);
        $entityManager->persist($voiture3);
        $entityManager->flush();

        return $this->redirectToRoute('voiture_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/new', name: 'voiture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Dans le cadre d'un nouvel enregistrement :
        // on instancie une entité (ici une voiture)
        $voiture = new Voiture();

        // on crée un formulaire via notre Type (ici VoitureType) et le second paramètre sera l'entité précédemment créée
        $form = $this->createForm(VoitureType::class, $voiture);
        // on hydrate notre formulaire et l'entité via les données qu'on aura tapées
        $form->handleRequest($request);

        // on vérifie que le formulaire est envoyé et validé
        if ($form->isSubmitted() && $form->isValid()) {
            // on récupère les images transmises
            $images = $form->get('images')->getData();
            foreach ($images as $image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                $img = new Images();
                $img->setNom($fichier);
                $voiture->addImage($img);
            }
            // Préparation de l'enregistrement dans notre base de donnée qui aura pour paramètre l'entité créé précédemment
            $entityManager->persist($voiture);
            // puis on enregistre tout ce que l'on a persisté
            $entityManager->flush();

            $this->addFlash('notice', 'Ma voiture est bien enregistré');
            return $this->redirectToRoute('voiture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('voiture/new.html.twig', [
            'voiture' => $voiture,
            'form' => $form,
        ]);
    }

    #[Route('/suppressionListeVoiture', name: 'suppressionListeVoiture')]
    public function suppressionListeVoiture(VoitureRepository $voitureRepository, EntityManagerInterface $entityManager): Response
    {
        $listeVoiture = $voitureRepository->findAll();
        $nbrVoiture = count($listeVoiture);
        $nbrSuppression = count($listeVoiture) < 3 ? $nbrVoiture : 3;

        for ($i = $nbrVoiture; $i > $nbrVoiture - $nbrSuppression; $i--) {
            $entityManager->remove($listeVoiture[$i - 1]);
        }

        $entityManager->flush();

        if (0 === $nbrSuppression) {
            $this->addFlash("notice", "Aucune voiture à supprimer");
        } else {
            $this->addFlash("notice", "Vous avez supprimé : $nbrSuppression voiture.s");
        }

        return $this->redirectToRoute('voiture_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/suppressionListeVoitureAvecNotreRepo', name: 'suppressionListeVoitureAvecNotreRepo')]
    public function suppressionListeVoitureAvecNotreRepo(VoitureRepository $voitureRepository, EntityManagerInterface $entityManager): Response
    {
        $listeVoiture = $voitureRepository->supprimeTroisVoiture();
        $nbrSuppression = count($listeVoiture);

        for ($i = $nbrSuppression; $i > 0; $i--) {
            $entityManager->remove($listeVoiture[$i - 1]);
        }

        $entityManager->flush();

        if (0 === $nbrSuppression) {
            $this->addFlash("notice", "Aucune voiture à supprimer");
        } else {
            $this->addFlash("notice", "Vous avez supprimé : $nbrSuppression voiture.s");
        }

        return $this->redirectToRoute('voiture_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'voiture_show', methods: ['GET'])]
    public function show(Voiture $voiture): Response
    {
        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    #[Route('/{id}/edit', name: 'voiture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Voiture $voiture, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new \Exception("Seuls les admins peuvent voir cette page");
        }

        $form = $this->createForm(VoitureType::class, $voiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // on récupère les images transmises
            $images = $form->get('images')->getData();
            foreach ($images as $image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                $img = new Images();
                $img->setNom($fichier);
                $voiture->addImage($img);
            }
            $entityManager->flush();
        }

        return $this->renderForm('voiture/edit.html.twig', [
            'voiture' => $voiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'voiture_delete', methods: ['POST'])]
    public function delete(Request $request, Voiture $voiture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $voiture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($voiture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('voiture_index', [], Response::HTTP_SEE_OTHER);
    }

      #[Route('/supprime/image/{id}', name:"voiture_delete_image", methods: ['GET'])]
        public function deleteImage(Images $image, EntityManagerInterface $entityManager){

              // On récupère le nom de l'image
              $nom = $image->getNom();

              // On supprime le fichier
              unlink($this->getParameter('images_directory') . '/' . $nom);

              // On supprime l'entrée de la base
              $entityManager->remove($image);
              $entityManager->flush();


          return $this->redirectToRoute('voiture_index');
      }

    #[Route('/ajout/annonce', name:"ajout_annonce", methods: ['GET'])]
    public function ajoutAnnonce(ParamConverter $config, Request $request, Voiture $voiture, EntityManagerInterface $entityManager){

      $voiture = new Voiture();

        $form = $this->createForm(VoitureType::class, $voiture);
        // on hydrate notre formulaire et l'entité via les données qu'on aura tapées
        $form->handleRequest($request);

        // on vérifie que le formulaire est envoyé et validé
        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->persist($voiture);
            $entityManager->flush();

        }
        return $this->redirectToRoute('voiture_index');
    }

}
