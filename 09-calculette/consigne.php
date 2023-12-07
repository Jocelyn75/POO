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
    public $number1;
    public $number2;
    
    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }

    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }

    public function getNumber1()
    {
        return $this->number1;
    }

    public function getNumber2()
    {
        return $this->number2;
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

$calc = new Calculette(5,7);
echo $calc->additionner() . "\n";
echo $calc->soustraire() . "\n";
echo $calc->multiplier() . "\n";
echo $calc->diviser() . "\n";


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