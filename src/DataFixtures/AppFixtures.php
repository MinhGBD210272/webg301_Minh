<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('en_US');
        for ($i=1; $i<=20; $i++) {
            $post = new Post();
            $post->setTitle($faker->sentence(3));
            $post->setContent($faker->text(500));
            $post->setCreatedAt($faker->dateTimeBetween('- 3 months'));
            $manager->persist($post);
        }
        $manager->flush();
    }
}
