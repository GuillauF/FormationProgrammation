<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/jj', name: 'js_')]
class JsController extends AbstractController
{
    #[Route('/', name: 'aideMemo')]
    public function aideMemo(): Response
    {
        return $this->render('js/aideMemo.twig', [
            'controller_name' => 'JsController',
        ]);
    }

    #[Route('/premierExo', name: 'premierExo')]
    public function premierExo(): Response
    {
        return $this->render('js/premierExo.twig');
    }

    #[Route('/chifoumi', name: 'chifoumi')]
    public function chifoumi(): Response
    {
        return $this->render('js/chifoumi.twig');
    }

    #[Route('/todo', name: 'todo')]
    public function todo(): Response
    {
        return $this->render('js/todo.twig');
    }


    #[Route('/class', name: 'class')]
    public function class(): Response
    {
        return $this->render('js/class.twig');
    }

    #[Route('/tousLesExos', name: 'tousLesExos')]
    public function tousLesExos(): Response
    {
        return $this->render('js/tousLesExos.twig');
    }

    #[Route('/form', name:'formulaire')]
    public function form() : Response
    {
        return $this->render('js/form.twig');
    }

    #[Route('/formComplet', name:'formComplet')]
    public function formComplet() : Response
    {
        return $this->render('js/formComplet.twig');
    }

    #[Route('/traiteajax', name:'traiteajax')]
    public function traiteajax(Request $r) : Response
    {
        return $this->json($r->request->all());
    }

    #[Route('/snake', name:'snake')]
    public function snake(Request $r) : Response
    {
        return $this->render('js/snake.twig');
    }

}