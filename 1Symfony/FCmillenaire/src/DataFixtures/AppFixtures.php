<?php

namespace App\DataFixtures;


use App\Entity\Joueur;

use App\Entity\ReservationBillet;
use App\Entity\User;
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


        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        $user = new User();
        $user->setEmail($faker->email());
        $user->setPassword($faker->password());
        $manager->persist($user);


        for ($j = 0; $j < mt_rand(15, 20); $j++) {
            $joueur = new Joueur();
            $joueur->setName($faker->firstName('male'))
                ->setSurname(strtoupper($faker->lastName()))
                ->setMail($faker->email())
                ->setDescription($faker->sentence(10, true))
                ->setPicture($faker->imageUrl())
                ->setCountry($faker->country())
                ->setGenre($faker->randomElement($array = array('male', 'female')));

            $manager->persist($joueur);

            for ($n = 0; $n < mt_rand(1, 100); $n++) {
                $reservation = new ReservationBillet();
                $reservation->setUser($user);
                $reservation->setNumero($faker->randomNumber())
                    ->setName($faker->name('male'))
                    ->setPrice(mt_rand(15, 600));
            }
            $manager->persist($reservation);
        }


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
