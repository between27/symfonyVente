<?php

namespace App\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Marque;

class MarqueFixtures extends Fixture
{
    private const MARQUE_REFERENCE = 'Marque';
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $listeMarques = ['Nike', 'Adidas', 'Puma', 'Reebok', 'New Balance', 'Asics', 'Under Armour', 'Fila', 'Vans', 'Converse',
            'Jordan', 'Le Coq Sportif', 'Mizuno', 'Skechers', 'Salomon', 'Timberland', 'Diadora', 'Ellesse', 'Kappa', 'Lacoste'];

        foreach ($listeMarques as $key => $uneMarque) {
            $marque = new Marque();
            $marque->setNom($uneMarque);
            $manager->persist($marque);
            $this->addReference(self::MARQUE_REFERENCE .'_' . $key, $marque);
        }
        $manager->flush();


    }
}