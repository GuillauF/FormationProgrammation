<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/react', name: 'react_')]
class ReactController extends AbstractController
{
    #[Route('/', name: 'first')]
    public function first() : Response
    {
        return $this->render('js/react/first.twig');
    }

    #[Route('/exoFirst', name: 'exoFirst')]
    public function exoFirst() : Response
    {
        return $this->render('js/react/first.twig');
    }

    #[Route('/exoFirstJsx', name: 'exoFirstJsx')]
    public function exoFirstJsx() : Response
    {
        return $this->render('js/react/exoFirstJsx.twig');
    }

    #[Route('/component', name: 'component')]
    public function component() : Response
    {
        return $this->render('js/react/component.twig');
    }

    #[Route('/componentClass', name: 'componentClass')]
    public function componentClass() : Response
    {
        return $this->render('js/react/componentClass.twig');
    }

    #[Route('/maPage', name: 'maPage')]
    public function maPage() : Response
    {
        return $this->render('js/react/maPage.twig');
    }

    #[Route('/formComplet', name: 'formComplet')]
    public function formComplet() : Response
    {
        return $this->render('js/react/formCompletClass.twig');
    }

    #[Route('/todolist', name: 'todolist')]
    public function todolist() : Response
    {
        return $this->render('js/react/todolist.twig');
    }

    #[Route('/hook', name: 'hook')]
    public function hook() : Response
    {
        return $this->render('js/react/hook.twig');
    }

    #[Route('/tinder', name: 'tinder')]
    public function tinder() : Response
    {
        return $this->render('js/react/tinder.twig');
    }

    #[Route('/ajaxSansRincer', name: 'ajaxSansRincer', methods: ['GET'] )]
    public function ajaxSansRincer(UserRepository $userRepository, NormalizerInterface $normalizable) : Response
    {
        return $this->json($normalizable->normalize($userRepository->findAll()));
    }

    #[Route('/ajaxSansRincerBis', name: 'ajaxSansRincerBis', methods: ['GET'] )]
    public function ajaxSansRincerBis(HttpClientInterface $httpClient) : Response
    {
        $response = $httpClient->request(
            'GET',
            'https://randomuser.me/api/?results=100&nat=fr'
        );

        return $this->json($response->toArray());
    }
}