<?php

namespace  App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\TailleVetement;


class TailleVetementFixtures extends Fixture
{
    private const TAILLE_REFERENCE = 'TailleVetement';
    public function load(ObjectManager $manager)
    {
        $listeTailles = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];

        foreach ($listeTailles as $key => $uneTaille) {
            $taille = new TailleVetement();
            $taille->setTaille($uneTaille);
            $manager->persist($taille);
            $this->addReference(self::TAILLE_REFERENCE .'_' . $key, $taille);
        }
        $manager->flush();
    }
}