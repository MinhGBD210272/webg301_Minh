<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $post = new Post();
        $post->setTitle('title');
        $post->setContent('content');
        $post->setCreatedAt(new \DateTime());
        $manager->persist($post);
        $manager->flush();
    }
}
