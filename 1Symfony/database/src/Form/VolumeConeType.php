<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VolumeConeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rayon')
            ->add('hauteur')
            ->add('arrondi', CheckboxType::class, [
                'label'    => 'Arrondir la valeur ?',
                'mapped' => false,
                'required' => false,
            ])
            ->add('calculer', SubmitType::class)
            ->getForm();
    }
}
