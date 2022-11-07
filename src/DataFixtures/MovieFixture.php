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
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('the littel bay');
        $movie2->setRelaseYear('2008');
        $movie2->setDescription('This is the discription');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2020/12/09/16/08/joker-5817831_960_720.png');
        $manager->persist($movie2);
    }
}
