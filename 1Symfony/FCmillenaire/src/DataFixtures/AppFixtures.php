<?php

namespace App\DataFixtures;

use App\Entity\Joueur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);

        for ($j = 0; $j < 100; $j++) {
            $joueur = new Joueur;
            $joueur->setName($faker->firstName())
                ->setSurname($faker->lastName())
                ->setMail($faker->email());
            $manager->persist($joueur);
        }



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
