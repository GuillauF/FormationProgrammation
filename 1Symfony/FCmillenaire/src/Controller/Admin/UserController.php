<?php

namespace App\Controller\Admin;

use App\Entity\Images;
use App\Entity\User;
use App\Form\UpdateUserFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/utilisateur')]
class UserController extends AbstractController
{
    #[Route('/', name: 'utilisateur_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_USER')) {
            throw new \Exception("Seuls les admin/utilisateurs peuvent voir cette page");
        }
        return $this->render('utilisateur/index.html.twig', [
            'voitures' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'utilisateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Dans le cadre d'un nouvel enregistrement :
        // on instancie une entité (ici une voiture)
        $user = new User();

        // on crée un formulaire via notre Type (ici VoitureType) et le second paramètre sera l'entité précédemment créée
        $form = $this->createForm(UpdateUserFormType::class, $user);
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
                $user->addImage($img);
            }
            // Préparation de l'enregistrement dans notre base de donnée qui aura pour paramètre l'entité créé précédemment
            $entityManager->persist($user);
            // puis on enregistre tout ce que l'on a persisté
            $entityManager->flush();

            $this->addFlash('notice', 'utilisateur est bien enregistré');
            return $this->redirectToRoute('utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $user,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'utilisateur_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'voiture' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="utilisateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UpdateUserFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('utilisateur_index');
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, User $voiture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $voiture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($voiture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/supprime/image/{id}', name:"utilisateur_delete_image", methods: ['GET'])]
    public function deleteImage(Images $image, EntityManagerInterface $entityManager){

        // On récupère le nom de l'image
        $nom = $image->getNom();

        // On supprime le fichier
        unlink($this->getParameter('images_directory') . '/' . $nom);

        // On supprime l'entrée de la base
        $entityManager->remove($image);
        $entityManager->flush();

        return $this->redirectToRoute('utilisateur_index');
    }

    #[Route('/ajout/annonce', name:"ajout_annonce", methods: ['GET'])]
    public function ajoutAnnonce(ParamConverter $config, Request $request, User $user, EntityManagerInterface $entityManager){

        $user = new User();

        $form = $this->createForm(UpdateUserFormType::class, $user);
        // on hydrate notre formulaire et l'entité via les données qu'on aura tapées
        $form->handleRequest($request);

        // on vérifie que le formulaire est envoyé et validé
        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->persist($user);
            $entityManager->flush();

        }
        return $this->redirectToRoute('utilisateur_index');
    }

}
