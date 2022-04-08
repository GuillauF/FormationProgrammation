<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use App\Entity\Joueur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
        $faker->addProvider(new \Bezhanov\Faker\Provider\Placeholder($faker));
        $faker->addProvider(new \Bezhanov\Faker\Provider\Demographic($faker));


        for ($e = 0; $e < 10; $e++) {

            $equipe = new Equipe();
            $equipe->setName(strtoupper($faker->city))
                ->setJoueur($faker->name);

            $manager->persist($equipe);

            for ($j = 0; $j < mt_rand(15, 20); $j++) {
                $joueur = new Joueur;
                $joueur->setName($faker->firstName())
                    ->setSurname(strtoupper($faker->lastName()))
                    ->setMail($faker->email())
                    ->setDescription($faker->sentence(10,true))
                    ->setPicture($faker->imageUrl())
                    ->setCountry($faker->country())
                    ->setGenre($faker->randomElement($array=array('male','female')))
                    ->setEquipe($equipe);

                $manager->persist($joueur);


            }
        }


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
