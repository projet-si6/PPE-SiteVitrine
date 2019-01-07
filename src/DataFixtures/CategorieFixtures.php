<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Categorie;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $meubles = new Categorie();
        $meubles->setLibelle('Meubles');
        $manager->persist($meubles);

        $bibelots = new Categorie();
        $bibelots->setLibelle('Bibelots');
        $manager->persist($bibelots);

        $vetements = new Categorie();
        $vetements->setLibelle('Vetements');
        $manager->persist($vetements);


        $manager->flush();

        // reference pour acceder avec une autre fixture
        $this->addReference('Meubles', $meubles);
        $this->addReference('Bibelots', $bibelots);
        $this->addReference('Vetements', $vetements);
    }
}
