<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark Knight");
        $movie->setReleaseYear(2008);
        $movie->setDescription('This sit he description of dark knight');
        $movie->setImagePath('https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Batman_Logo.svg/1200px-Batman_Logo.svg.png');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Avengers: Endgame");
        $movie2->setReleaseYear(2009);
        $movie2->setDescription('This sit he description of avengers');
        $movie2->setImagePath('https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg');
        $manager->persist($movie2);

        $manager->flush();
    }
}
 