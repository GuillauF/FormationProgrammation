<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}