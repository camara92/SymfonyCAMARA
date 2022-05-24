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
        $daouda= "Hello les Devs";
        for ($i = 0; $i < 5; $i++) {
            $post = new Contact();
            $post->setFullname($faker->name())
                ->setEmail($faker->email())
                ->setMessage($faker->sentence($nbWords = 2, $variableNbWords = true))
                ->setSubject($faker->sentence($nbWords = 1, $variableNbWords = true));
               

            $manager->persist($post);
        }

        $manager->flush();
    }
}
