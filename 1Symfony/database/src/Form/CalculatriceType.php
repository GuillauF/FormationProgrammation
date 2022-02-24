<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CalculatriceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('premierNombre')
            ->add('operateur', ChoiceType::class, array(
                'choices' => array(
                    '+' => 'add',
                    '-' => 'sub',
                    '*' => 'mul',
                    '/' => 'div'
                )
            ))
            ->add('deuxiemeNombre')
            ->add('calculer', SubmitType::class)
            ->getForm();
    }
}