<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use App\Entity\Joueur;
use Bezhanov\Faker\Provider\Demographic;
use Bezhanov\Faker\Provider\Placeholder;
use Bezhanov\Faker\ProviderCollectionHelper;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        ProviderCollectionHelper::addAllProvidersTo($faker);
        $faker->addProvider(new Placeholder($faker));
        $faker->addProvider(new Demographic($faker));


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
