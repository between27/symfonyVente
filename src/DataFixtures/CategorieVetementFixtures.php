<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\CategorieVetement;

class CategorieVetementFixtures extends Fixture
{
    private const CATEGORIE_REFERENCE = 'CategorieVetement';

    public function load(ObjectManager $manager)
    {
        $listeCategories = ['T-shirt', 'Pantalon', 'Veste', 'Pull', 'Chemise', 'Short', 'Jupe', 'Robe', 'Sous-vêtement', 'chaussure'];

        foreach ($listeCategories as $key => $uneCategorie) {
            $categorie = new CategorieVetement();
            $categorie->setCategorie($uneCategorie);
            $manager->persist($categorie);
            $this->addReference(self::CATEGORIE_REFERENCE .'_' . $key, $categorie);
        }
        $manager->flush();
    }



}