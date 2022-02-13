<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/calculator')]
class CalculatorController extends AbstractController
{
    #[Route('/', name: 'calculator_index', methods: ['GET', 'POST'])]
    public function calculatorAction(Request $request) : Response
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $calculator = $form->getData();

            $result = $calculator->performCalculation();

            return $this->renderForm('calculator/index.html.twig', [
                'result' => $result,
                'form' => $form,
            ]);
        }

        return $this->render('calculator/index.html.twig', array('form' => $form->createView()));
    }
}
