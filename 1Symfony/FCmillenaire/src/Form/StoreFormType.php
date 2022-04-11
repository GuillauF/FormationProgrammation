<?php
namespace App\Form;

use App\Entity\Store;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class  StoreFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
      $builder

//            ->add('name', TextType::class, [
//                'label' => 'Votre nom',
//                'attr' => [
//                    'placeholder' => 'Merci de saisir votre nom'
//                ]
//            ]);


            ->add ('name');

//           ->add ('email');



   //          ->add('billets');
    }

// il faut utiliser la methode Optionsresolver pour faire le formulaire de la base donnée store pour pouvoir appeler billets
// et non la méthode de l'exo second formulaire de Laurent de Symfony qui n'est pas pratique pour les bases de données.
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Store::class,
        ]);
    }
}

