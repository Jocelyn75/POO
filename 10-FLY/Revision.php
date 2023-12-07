<?php

/*
1 - Créez une classe qui doit contenir trois propriétés privées (nom, prenom, age).
2 - Chaque propriété doit avoir son getter et setter
3 - Vérifier si la donnée est bien une chaîne de caractères dans le setter, Si c'est le cas, affectez la valeur sinon, renvoyez un booléen FALSE.
4 - Ajoutez un constructeur qui se chargera d'initialiser les valeurs des propriétés grâce aux setters.
5 - Ensuite, afficher les données en appelant vos getters.
*/


class User 
{
    private $_nom;
    private $_prenom;
    private $_age;

    public function setterNom($nom)
    {
        if(is_string($nom))
        {
            $this->_nom = $nom;
        }
        else
        {
            return false;
        }
    }

    public function setterPrenom($prenom)
    {
        if(is_string($prenom))
        {
            $this->_prenom = $prenom;
        }
        else
        {
            return false;
        }
    }

    public function setterAge($age)
    {
        if(is_int($age))
        {
            $this->_age = $age;
        }
        else
        {
            return false;
        }
    }

    public function getterNom()
    {
        return $this->_nom;   
    }

    public function getterPrenom()
    {
        return $this->_prenom;   
    }

    public function getterAge()
    {
        return $this->_age;   
    }


    public function __construct($nom, $prenom, $age)
    {
        $this->setterNom($nom);
        $this->setterPrenom($prenom);
        $this->setterAge($age);
    }
}

$user = new User("Dufour", "Jocelyn", 39);
echo $user->getterNom() . "\n";
echo $user->getterPrenom() . "\n";
echo $user->getterAge() . "\n";




/*
1 - Créez une classe qui doit contenir trois propriétés privées (nom, prenom, age).
2 - Chaque propriété doit avoir son getter et setter
3 - Vérifier si la donnée est bien une chaîne de caractères dans le setter, Si c'est le cas, affectez la valeur sinon, renvoyez un booléen FALSE.
4 - Ajoutez un constructeur qui se chargera d'initialiser les valeurs des propriétés grâce aux setters.
5 - Ensuite, afficher les données en appelant vos getters.
*/
