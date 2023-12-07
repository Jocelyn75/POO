<?php

/*
    - Le trait n'est pas une classe, mais un regroupement de méthodes. 
    - Le trait permet de faire la même chose que l'héritage, mais sans être bloqué par la limite d'un héritage par classe. On peut utiliser plusieurs traits dans une même classe. 
    - Un trait n'est pas instanciable.
    - Un trait est un regroupement de méthodes et de propriétés pouvant être importées au sein d'une classe. 
    - Une classe ne peut hériter que d'une seule classe à la fois.
    - En revanche, une classe peut importer plusieurs traits à la fois (similaire à un héritage).
    => Le trait permet d'écrire le code une seule fois et de le réutiliser à plusieurs reprises où on le souhaite.
*/


/* Exercices : Créer deux  traits (TPanier&TMembre)

Trouver le moyen de créer un trait. 

1 - Dans TPanier créer une propriété "nbProduit" qui sera égale à 1 et une méthode affichageProduits qui return "Affichage des produits". ensuite pour le deuxième trait (TMembre) ajouter une méthode affichageMembres qui return "affichage des membres !)

2 - Créer une class Site et trouver le moyen de faire hérité vos deux traits à cette class.

3 - Instancier votre class (site), puis afficher le nombre de produit et ce que return vos méthodes affichageProduits et affichageMembre, en passant par l'objet de la class instancier.
*/

trait TPanier
{
    public $nbProduit = 1;
    public function affichageProduits()
    {
        return "Affichage des produits";
    }
}

trait TMembre
{
    public function affichageMembres()
    {
        return "Affichage des membres";
    }
        
    }

class Site
{
    USE TPanier;
    USE TMembre;
}

$site = new Site;

echo $site->affichageProduits() . "\n";
echo $site->affichageMembres() . "\n";
echo $site->nbProduit . "\n";