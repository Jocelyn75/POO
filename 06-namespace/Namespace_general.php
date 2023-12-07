<?php

//Instancier les namespaces provenant du fichier "Namespace_commerce"

namespace General;

require_once "Namespace_commerce.php"; // Importe les namespaces Commerce1, Commerce2 et Commerce3 du fichier Namespace_commerce.php

USE Commerce1, Commerce2, Commerce3;  // Pour appeler les namespaces d'un autre fichier, on utilise USE.
use Commerce1\Command;

echo __NAMESPACE__ . "\n";  // Affiche le nom de l'espace actuel, du namespace actuel.

$commande = new Commerce1\Command; // On crée un nouvel objet en instanciant la classe "command" du namespace "Commerce1".

$produit = new Commerce2\Produit; // On crée un nouvel objet en instanciant la classe "Produit" du namespace "Commerce2".

$produit2 = new Commerce3\Produit;

$commande2 = new Commerce3\Command;

echo $commande->nbCommande . "\n";
echo $produit->nbProduit . "\n";
echo $produit2->nbProduit . "\n";
echo $commande2->nbCommande . "\n";

?>