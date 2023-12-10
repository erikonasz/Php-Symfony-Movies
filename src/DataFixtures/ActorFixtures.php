<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $actor = new Actor();
        $actor->SetName('Christian Bale');
        $manager->persist($actor);

        $actor2 = new Actor();
        $actor2->SetName('Heath Ledger');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->SetName('Robert Downey Jr');
        $manager->persist($actor3);

        $actor4 = new Actor();
        $actor4->SetName('Chris Evans');
        $manager->persist($actor4);

        $manager->flush();


    }
}
 