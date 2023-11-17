<?php

namespace App\DataFixtures;
 
use App\Entity\Sauce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
 
class SauceFixtures extends Fixture
{
    private const SAUCE_REFERENCE = 'Sauce';
    
    public function load(ObjectManager $manager)
    {
        $nomsSauces = [
            'Blanche',
            'Mayonnaise',
            'Ketchup',
            'Barbecue',
            'Biggy',
            'Andalouse',
        ];
 
        foreach ($nomsSauces as $key => $nomSauce) {
            $sauce = new Sauce();
            $sauce->setNom($nomSauce);
            $manager->persist($sauce);
            $this->addReference(self::SAUCE_REFERENCE . '_' . $key, $sauce);
        }
 
        $manager->flush();
    }
}