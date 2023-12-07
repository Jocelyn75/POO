<?php

/*
    Namespace est un espace nommé pour nos classes. 
    Les espaces nommés permettent de classer nos classes. 
    Les espaces nommés permettent de créer des espaces différents au sein d'un fichier (l'équivalent d'un fichier par namespace), ce qui permet de nommer plusieurs classes de la même manière sans avoir de conflits. C'est utilisé pour donner un même nom significatif à plusieurs classes. 
*/

namespace Commerce1;

    class Command
    {
        public $nbCommande = 1;
    }

namespace Commerce2;

    class Produit
    {
        public $nbProduit = 20;
    }

namespace Commerce3;

    class Produit
    {
        public $nbProduit = 42;
    }

    class Command
    {
        public $nbCommande = 12;
    }

?>