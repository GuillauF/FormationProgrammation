<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Marque;
use App\Entity\Prix;
use App\Entity\Voiture;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class VoitureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')

            ->add('marque', EntityType::class, [
                'class' => Marque::class, // nom l'entité dont on a besoin
//                'expanded' => true, // voir la documentation de "expanded" et "multiple" https://symfony.com/doc/current/reference/forms/types/entity.html#select-tag-checkboxes-or-radio-buttons
//                'multiple' => true,

//                'choice_label' => function(Marques $marques) {
//                    return $marques->getNom();
//                }
                'choice_label' => 'nom' // la valeur est un attribut d'une entité
            ])
            ->add('images', FileType::class,
                ['label' => 'Ajouter une image',
                    'multiple' => true,
                    'mapped' => false,
                    'required' => false
                ])
            ->add('prix', EntityType::class,
                ['class' => Prix::class, // nom l'entité dont on a besoin
                'choice_label' => 'valeur' // la valeur est un attribut d'une entité

                ])
            ->add('description', TextareaType::class,
                ['label' => 'Ajouter une description',
                    'required' => false
                ])
            ->add('categories', EntityType::class,
                ['class' => Categories::class,

                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}