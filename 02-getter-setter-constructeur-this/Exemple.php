<?php


class Etudiant
{
  // Propriétés privées de la classe Etudiant 
  private $prenom;
  private $nom;
  private $age;

  // Constructeur de la classe
  public function __construct($prenom, $nom, $age)
  {
    // Initialisation des propriétés avec les valeurs passées en paramètres
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->age = $age;
  }

  public function hello()
  {
    echo "Hello \n"; 
  }

  // Méthode pour définir le prénom de l'étudiant
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;
  }

  // Méthode pour définir le nom de l'étudiant
  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  // Méthode pour définir l'âge de l'étudiant
  public function setAge($age)
  {
    $this->age = $age;
  }

  // Méthode pour obtenir le prénom de l'étudiant
  public function getPrenom()
  {
    return $this->prenom;
  }
}

// Création d'une instance de la classe Etudiant avec des valeurs initiales
$etudiant = new Etudiant("Francis", "Muna", 42);

// Affichage du prénom de l'étudiant
echo $etudiant->getPrenom();

// Note : Les lignes suivantes sont commentées, car le prénom, le nom et l'âge sont déjà définis dans le constructeur.
// Si besoin, vous pouvez les décommenter et utiliser les méthodes setPrenom, setNom et setAge pour modifier ces valeurs.

// $etudiant->setPrenom("Francis");
// $etudiant->setNom("Muna");
// $etudiant->setAge(42);
?>
