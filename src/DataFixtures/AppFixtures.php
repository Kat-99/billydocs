<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Migrations\Version\Factory;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        // je gere les utlisateurs

        $faker = Faker\Factory::create('fr_FR');

        $users = [];

        for($i = 1; $i<=15; $i++){
            $user = new User();

            $password = $this-> encoder-> encodePassword($user, 'password');

            $user->setFirstname($faker->firstname)
                 ->setLastname($faker->lastname)
                 ->setEmail($faker->email)
                 ->setInscriptionDate($faker->dateTime)
                 ->setLastLoggedDate($faker->dateTime)
                 ->setPassword($password);

            $manager->persist($user);

            $users[] = $user;

        }

        $manager->flush();
    }
}
