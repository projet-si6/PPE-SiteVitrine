<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Produit;
use App\Entity\Categorie;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      for($i=1;$i<=5 ;$i++){

        $meubles=new Produit;
        $cate = $this->getReference('Meubles');
        $meubles->setTitre("Meubles Collection n°$i")
                 ->setDescription("Edition Speciale")
                 ->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAM0_BJKsv2rWNB2DWxbaHahLjBZH-GImrY4CPpuJ7qa49F81Y")
                 ->setPrix("10$i")
                 ->setCategorieProduit($cate);          
        $manager->persist($meubles);
      }

      for($i=1;$i<=5 ;$i++){

        $bibelots=new Produit;
        $cate = $this->getReference('Bibelots');
        $bibelots->setTitre("Bibelots Collection n°$i")
                 ->setDescription("Edition Speciale")
                 ->setImage("https://images-na.ssl-images-amazon.com/images/I/81jNqMIbRCL._SY355_.jpg")
                 ->setPrix("10$i")
                 ->setCategorieProduit($cate);          
        $manager->persist($bibelots);
      }

      for($i=1;$i<=5 ;$i++){

        $vetements=new Produit;
        $cate = $this->getReference('Vetements');
        $vetements->setTitre("Vetements Collection n°$i")
                 ->setDescription("Edition Speciale")
                 ->setImage("https://ol-boutique-cdn-2.azureedge.net/17481-large_default/veste-anthem-ol-adulte-noir-2018-19.jpg")
                 ->setPrix("10$i")
                 ->setCategorieProduit($cate);          
        $manager->persist($vetements);
      }


        $manager->flush();
    }
}
