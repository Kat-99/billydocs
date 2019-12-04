<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Migrations\Version\Factory;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // je gere les utlisateurs

        $faker = Faker\Factory::create('fr_FR');

        $users = [];

        for($i = 1; $i<=15; $i++){
            $user = new User();

            $user->setFirstname($faker->firstname)
                ->setLastname($faker->lastname)
                ->setEmail($faker->email)
                ->setInscriptionDate($faker->dateTime)
                ->setLastLoggedDate($faker->dateTime)
                ->setPassword('password');
            
            $manager->persist($user);

            $users[] = $user;

        }

        $manager->flush();
    }
}
