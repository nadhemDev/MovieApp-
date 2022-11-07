<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('James Bonde');
        $manager->persist($actor);


        $actor1 = new Actor();
        $actor1->setName('Alpha');
        $manager->persist($actor1);

        $actor2 = new Actor();
        $actor2->setName('Nadhem');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('Kamel Touati');
        $manager->persist($actor3);


        $actor4 = new Actor();
        $actor4->setName('Kamel Touati');
        $manager->persist($actor4);

        $manager->flush();

        $this->addReference('actor_1', $actor1);
        $this->addReference('actor_2', $actor2);
        $this->addReference('actor_3', $actor3);
        $this->addReference('actor_4', $actor4);
    }
}
