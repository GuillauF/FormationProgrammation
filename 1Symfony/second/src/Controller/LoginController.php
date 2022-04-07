<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]

    public function login(Request $r): Response
    {
        {
            $form = $this->createFormBuilder()
                ->add('mail')
                ->add('prenom')
                ->add('nom')
                ->add('login')
                ->add('password', PasswordType::class)
                //->add('envoie', SubmitType::class)
                ->setMethod('POST')
                ->getForm();

            $form->handleRequest($r);

            $validMail = '';
            $mail = "";
//dd($form->isSubmitted(), $form->isValid(), $form->getData());
            if ($form->isSubmitted() && $form->isValid()) {
                $r->request->get('form')['mail'];
                $mesDonnees = $form->getData();
                $mail = $mesDonnees['mail'];

                // Valider l'email
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    $validMail = "L'adresse e-mail est valide";
                }else{
                    $validMail =  "L'adresse e-mail n'est pas valide";
                }
                //dd($form->getData(), $cequejetape, $r->request);
            }
        }
        return $this->render('login/index.html.twig', [
            'formulaire' => $form->createView(),
            'email' => $mail,
            'resultat' => $validMail
        ]);
    }
}
