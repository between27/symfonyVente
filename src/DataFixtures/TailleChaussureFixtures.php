<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\TailleChaussure;

class TailleChaussureFixtures extends Fixture
{
    private const TAILLE_REFERENCE = 'TailleChaussure';
    public function load(ObjectManager $manager)
    {
        $listeTailles = ['35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45'];

        foreach ($listeTailles as $key => $uneTaille) {
            $taille = new TailleChaussure();
            $taille->setTaille($uneTaille);
            $manager->persist($taille);
            $this->addReference(self::TAILLE_REFERENCE .'_' . $key, $taille);
        }
        $manager->flush();
    }
}