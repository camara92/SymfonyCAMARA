<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager as PersistenceObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{


   
    public function load(PersistenceObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $post = new Contact();
            $post->setFullname($faker->sentence($nbWords = 2, $variableNbWords = true))
                ->setEmail($faker->sentence($nbWords = 10, $variableNbWords = true))
                ->setMessage($faker->name());
               

            $manager->persist($post);
        }

        $manager->flush();
    }
}
