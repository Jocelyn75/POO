<?php

class Maison
{
    private static $nbPiece = 7; // Appartient à la classe. 
    public static $espaceTerrain = "500m²"; // Appartient à la classe. 
    const HAUTEUR = "10m"; // Appartient à la classe.
    // Ce qui appartient à la classe impacte tous les objets.  

    public $color = "red"; // Appartient à l'objet.
    private $nbPorte = 10; // Appartient à l'objet. 

    public static function getNbPiece()
    {
        return self::$nbPiece; // self permet de récupérer dans la classe ce qui appartient à la classe en elle-même. 
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }
}

echo Maison::getNbPiece() . "\n"; // permet d'appeler ce qui est static. J'appelle une méthode de ma classe par ma classe. 
echo Maison::$espaceTerrain . "\n"; // J'appelle une propriété de ma classe par ma classe. 
echo Maison::HAUTEUR . "\n";

Maison::$espaceTerrain = "100m²";

$maison = new Maison;   // Il faut créer un objet pour ce qui n'est pas static
$maison->getNbPorte();

$maison2 = new Maison;
$maison2->color = "yellow";

/* 
    Précision : 
        static indique qu'un élément appartient à la classe et non à l'objet. (dans le cas d'une propriété, c'est variable)
        const indique qu'un élément appartient à la classe. (dans  le cas d'une propriété, c'est constant, non variable).  

    Une propriété statique peut changer de valeur au cours du temps à la différence d'une constante dans la valeur est fixe. Simplement, la valeur d'une propriété statique sera partagée par tous les objets issus de la classe dans laquelle elle a été définie.

    Opérateur : 
        - $objet->element : quand on veut récupérer une propriété ou une méthode qui appartient à l'objet, quand on est à l'extérieur de la classe

        - $this->element permet de récupérer un objet à l'intérieur de la classe. 

        class::element permet de récupérer une propriété ou une méthode à l'extérieur de la classe. 
        self::element permet de récupérer une propriété ou une méthode d'une classe à l'intérieur de la classe.
*/