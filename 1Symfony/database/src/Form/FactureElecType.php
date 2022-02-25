<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FactureElecType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('consommation')
            ->add('puissance', ChoiceType::class, array(
                'choices' => array(
                    '3kVA' => '3kVA',
                    '6kVA' => '6kVA',
                    '9kVA' => '9kVA',
                    '12kVA' => '12kVA',
                    '15kVA' => '15kVA',
                    '18kVA' => '18kVA',
                )
            ))
            ->add('HC', CheckboxType::class, [
                'label'    => 'En Heure creuse ?',
                'mapped' => false,
                'required' => false,
            ])
            ->add('HP', CheckboxType::class, [
                'label'    => 'En Heure pleine ?',
                'mapped' => false,
                'required' => false,
            ])
            ->add('calculer', SubmitType::class)
            ->getForm();
    }
}