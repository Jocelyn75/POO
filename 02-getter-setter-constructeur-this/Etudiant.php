<?php


// Une classe commence toujours par une majuscule.
class Etudiant 
{
    private $prenom;

    /* 
        __construct : méthode appelée automatiquement lors de l'instanciation. 
        On ne peut pas déclarer deux constructeurs en PHP au sein d'une même classe. 
    */

    public function __construct($arg)
    {
        echo "Instanciation..., nous avons reçu l'information suivante : $arg \n";
        $this->setPrenom($arg); // cela fonctionne, mais il est préférable de passer directement dans le setteur, plutôt que par le constructeur.  
    }

    public function setPrenom($arg)
    {
        if(is_string($arg)){
            $this->prenom = $arg;
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$etudiant = new Etudiant("Jocelyn");

/* 
    Le constructeur __construct s'exécute automatiquement quand on instancie la classe. Il n'ya pas besoin de l'appeler. Ici, nous mettons un argument après le nom de la classe qui atterrit directement dans le constructeur. 
*/
echo $etudiant->getPrenom();


/*  Autre exemple : 


class Etudiant
{
    public function __construct()
    {
        echo "Hello construct \n";
    }
    public function hello();
    {
        echo "Hello \n",
    }
}

$etudiant = new Etudiant;     // La fonction est appelée à ce moment-là, pas besoin d'appeler la fonction pour l'exécuter. 

*/


?>

