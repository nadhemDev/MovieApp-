<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('the Monster');
        $movie->setRelaseYear('2008');
        $movie->setDescription('This is the discription');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2020/12/09/16/08/joker-5817831_960_720.png');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);


        $movie2 = new Movie();
        $movie2->setTitle('the littel bay');
        $movie2->setRelaseYear('2019');
        $movie2->setDescription('This is the discription');
        $movie2->setImagePath('https://media.istockphoto.com/id/154002685/photo/happy-cartoon-monster.webp?s=612x612&w=is&k=20&c=RkXtEVkvjyjIaa8FQEH8JjjNHQgwrgaDBMpMY83jEUw=');
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);


        $manager->flush();
    }
}
