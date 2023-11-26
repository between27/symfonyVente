<?php

namespace App\DataFixtures;
use App\Entity\Commentaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentaireFixtures extends Fixture

{
    private const COMMENTAIRE_REFERENCE = 'Commentaire';
    public function load(ObjectManager $manager)
    {
        $commentaires = [
            "Ce burger est délicieux !",
            "Je n'ai pas aimé ce burger",
            "Je recommande ce burger",
            ];

        foreach ($commentaires as $key => $commentaire) {
            $commentaire = new Commentaire();
            $commentaire->setTexte($commentaire);
            $manager->persist($commentaire);
            $this->addReference(self::COMMENTAIRE_REFERENCE . '_' . $key, $commentaire);
        }
    }
}