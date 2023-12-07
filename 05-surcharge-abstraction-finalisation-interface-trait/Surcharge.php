<?php

class A 
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A 
{
    public function calcul() // Rdéefinition de la méthode calcul. 
    {
        /* 
        Surcharge (Override)
        */
        $nb = parent::calcul(); // parent:: permet d'aller chercher la méthode calcul dans la classe parente. parent:: fonctionne pour appeler une méthode d'une classe parent lors d'une surcharge afin d'éviter qu'elle ne s'appelle elle-même. (L'utilisation de $this est impossible ici, car la méthode calcul appelée sera celle de la classe B, elle s'exécutera donc en boucle.)
        if($nb <= 100) return "$nb est inférieur ou égal à 100 \n";
        else return "$nb est supérieur à 100 \n";
        /* L'écriture de la condition ci-dessus est la version condensée de : 
            if($nb <= 100)
            {
                return "$nb est inférieur ou égal à 100 \n";
            }
            else 
            {
                return "$nb est supérieur à 100 \n";
            }
        */
        
    }


    public function autreCalcul()
    {
        parent::calcul();
        /* 
        Il est possible d'atteindre une méthode de la classe parent, même si la méthode n'est pas redéfinie (surchargée)
        */
    }
}

$objet = new B;
echo $objet->calcul();