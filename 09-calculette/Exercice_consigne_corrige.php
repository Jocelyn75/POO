<?php
/*Exercice 1 - Classe "Calculette

Écrivez une classe nommée "Calculette" qui accepte 2 arguments lors de l'instanciation : number1 et number2 et qui les renseignent en tant que propriété, avec des getter et setter.

La classe devra également être composée de ces 4 méthodes (qui n'auront pas d'arguments) :

additionner() : renvoie l'addition de nombre1 et nombre2
soustraire() : ...
multiplier() : ...
diviser() : ...

Exemple d'utilisation :

$calc = new Calculette(5, 7);
calc->additionner(); // doit afficher 12
Assurez-vous également que lors du changement d'un des nombre, ce dernier soit un Number. Sinon, levez une erreur :

Exemple :
echo calc->setNumber1("6"); // doit afficher une erreur "Ceci n'est pas un nombre!"
L'utilisation d'un setter pour vérifier la valeur entrante vous sera utile 😉
*/
class Calculette
{
    private $number1; // L'intérêt des propriétés est qu'elles sont utilisables à l'intérieur de toute la classe, et pas seulement dans la méthode.
    private $number2;

    public function __construct($arg1 , $arg2)
    {
        $this->setterNumber1($arg1);
        // $this->number1 = $arg1;   est remplacé par le setter
        $this->setterNumber2($arg2);

        // $this->number2 = $arg2;  idem
    }

    public function getterNumber1()
    {
        return $this->number1;   
    }

    public function getterNumber2()
    {
        return $this->number2;   
    }

    public function setterNumber1($nb)
    {
        if(is_int($nb))
        {
            $this->number1 = $nb;
        }
        else
        {
            return false;
        }
    }

    public function setterNumber2($nb)
    {
        if(is_int($nb))
        {
            $this->number2 = $nb;
        }
        else
        {
            return false;
        }
    }

    public function additionner()
    {
        return $this->number1 + $this->number2;
    }

    public function soustraire()
    {
        return $this->number1 - $this->number2;
    }

    public function multiplier()
    {
        return $this->number1 * $this->number2;
    }

    public function diviser()
    {
        return $this->number1 / $this->number2;
    }
}

$calcul = new Calculette(10,7);
echo $calcul->additionner() . "\n";
echo $calcul->soustraire() . "\n";
echo $calcul->multiplier() . "\n";
echo $calcul->diviser() . "\n";

