<?php

namespace App\DataFixtures;

use App\Entity\People;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=0; $i < 25; $i++) { 
            $people = new People();
            $people->setName('people '.$i);
            $manager->persist($people);
        }

        $manager->flush();
    }
}
