<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\CategorieChaussure;

class CategorieChaussureFixtures extends Fixture
{

    private const CATEGORIE_REFERENCE = 'CategorieChaussure';

    public function load(ObjectManager $manager)
    {
        $listeCategories = ['Baskets', 'Chaussures de ville', 'Chaussures de sport'];

        foreach ($listeCategories as $key => $uneCategorie) {
            $categorie = new CategorieChaussure();
            $categorie->setCategorie($uneCategorie);
            $manager->persist($categorie);
            $this->addReference(self::CATEGORIE_REFERENCE .'_' . $key, $categorie);
        }
        $manager->flush();
    }

}