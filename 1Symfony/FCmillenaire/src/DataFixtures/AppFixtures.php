<?php

namespace App\DataFixtures;

<<<<<<< HEAD
use App\Entity\Joueur;
=======
>>>>>>> origin/FCmillenaire
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        $faker = \Faker\Factory::create('fr_FR');
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

        for ($j = 0; $j < 100; $j++) {
            $joueur = new Joueur;
            $joueur->setName($faker->firstName())
                ->setSurname($faker->lastName())
                ->setMail($faker->email());
            $manager->persist($joueur);
        }



=======
>>>>>>> origin/FCmillenaire
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
