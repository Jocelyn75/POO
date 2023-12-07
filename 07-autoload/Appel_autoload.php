<?php

require_once("Autoload.php");

/* La require_once unique de la ligne précédente remplace les require_once de chaque fichier.

require_once("A.class.php");
require_once("B.class.php");
require_once("C.class.php");
require_once("D.class.php");
*/

/*
Le but d'autoload est d'importer plusieurs fichiers dynamiquement, en une ligne de code, en créant une fonction pour cela. Cette fonction est à retrouver dans : fichier autoload.php
*/

$a = new A;
$b = new B;
$c = new C;
$d = new D;

?>