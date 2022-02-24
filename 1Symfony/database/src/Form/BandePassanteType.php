<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BandePassanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valeur')
            ->add('unite1', ChoiceType::class, array(
                'choices' => array(
                    'b/s' => 'b/s',
                    'kb/s' => 'kb/s',
                    'Mb/s' => 'Mb/s',
                    'Gb/s' => 'Gb/s',
                    'o/s' => 'o/s',
                    'ko/s' => 'ko/s',
                    'Mo/s' => 'Mo/s',
                    'Go/s' => 'Go/s',
                )
            ))
            ->add('unite2', ChoiceType::class, array(
                'choices' => array(
                    'b/s' => 'b/s',
                    'kb/s' => 'kb/s',
                    'Mb/s' => 'Mb/s',
                    'Gb/s' => 'Gb/s',
                    'o/s' => 'o/s',
                    'ko/s' => 'ko/s',
                    'Mo/s' => 'Mo/s',
                    'Go/s' => 'Go/s',
                )
            ))
            ->add('convertir', SubmitType::class)
            ->getForm();
    }
}