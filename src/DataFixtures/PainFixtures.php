<?php

namespace App\DataFixtures;

use App\Entity\Pain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PainFixtures extends Fixture {
    private const PAIN_REFERENCE = 'Pain';

    public function load(ObjectManager $manager) {
        $nomsPains = [
            'Pain blanc',
            'Pain complet',
            'Pain aux céréales',
            'Pain aux noix',
            'Pain aux olives',
            'Pain aux graines de sésame',
        ];

        foreach ($nomsPains as $key => $nomPain) {
            $pain = new Pain();
            $pain->setNom($nomPain);
            $manager->persist($pain);
            $this->addReference(self::PAIN_REFERENCE . '_' . $key, $pain);
        }

        $manager->flush();
    }
}