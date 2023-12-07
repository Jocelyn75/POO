<?php

class Panier{
    public $nbProduit; // Propriété
    private $nbProduit2;

    public function ajouterArticle($arg) // méthode
    { // Traitement
        return "L'article a été ajouté $arg \n";
    }

    protected function retirerArticle($arg) // méthode
    { // Traitement
        return "L'article a été retiré $arg \n";
    }

    private function afficherArticle() // méthode
    { // Traitement
        return "Voici les articles \n";
    }
}
/*
    "new" est un mot-clé permettant d'effectuer une instanciation (objet).
    Une classe peut produire plusieurs objets. 
    Nous pouvons donc effectuer plusieurs instanciations "new", il suffit de mettre le mot-clé "new" devant la classe pour créer un objet. 
*/
$panier = new Panier;

$panier->nbProduit = 5;

echo "Panier $panier->nbProduit produits \n"; // propriété publique, cela fonctionne. 
echo $panier->ajouterArticle("jean") . "\n"; // méthode publique

// echo $panier->retirerArticle("polo") . "\n";  => retirer article est une méthode protected, cela ne fonctionne pas et rend une erreur. L'élément est accessible uniquement dans la classe Panier. Avec protected, on ne peut pas accéder à la méthode

// echo $panier->afficherArticle() . "\n"; => Idem avec la méthode private. L'élément est accessible uniquement dans la class Panier. 

echo "***-----*** \n";

$panier2 = new Panier;
$panier2->nbProduit = 10;

$panier3 = new Panier;
$panier3->nbProduit = 42;

echo "Panier 2 $panier2->nbProduit produits \n";
echo "Panier 3 $panier3->nbProduit produits \n";

/* 
    NIVEAU DE VISIBILITE: 
    - public : accessible partout
    - protected : accessible dans la classe où elle a été déclarée et dans les classes héritières. 
    - privée : accessible uniquement dans la classe où elle a été déclarée.
    => Plus les données sont sensibles, plus l'accessibilité doit être restreinte. 
*/


?>