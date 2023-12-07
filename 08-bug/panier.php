<?php

session_start(); // genere une session

if(isset($_GET['action']) && $_GET['action'] == "create" || isset($_SESSION['panier']))
{
  $_SESSION['panier'] = array(26,27,28); // stock dans la session
  echo 'Produit présent dans le panier : ' . implode('-', $_SESSION['panier']) . '<br />';
  // implode Rassemble les éléments d'un tableau en une chaine 
  // Place entre les "-" entre les élements.
  echo '<a href="?action=vider"> Vider le panier</a>';
}
else
{
  echo '<a href="?action=create">Créer le panier</a>';
}
if(isset($_GET['action']) && $_GET['action'] == "vider")
{
  unset($_SESSION['panier']); // vide la session 
}

/*
Le deuxième "if" est à mettre au-dessus du premier "if" pour qu'il ne faille pas cliquer deux fois sur "Vider le panier" pour effectivement vider le panier. 
*/