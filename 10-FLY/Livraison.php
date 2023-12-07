<?php

/*

Création de la classe :
Créez une classe Livraison avec les propriétés privées suivantes : adresse, dateLivraison, et statut.
Constructeur ->
Ajoutez un constructeur à la classe Livraison qui prend en paramètre l'adresse et la dateLivraison. Le statut doit être optionnel et par défaut égal à "En attente".
Méthodes Getter et Setter ->
Ajoutez des méthodes getter et setter pour chaque propriété de la classe. Vérifiez le type de données dans les setters (par exemple, l'adresse doit être une chaîne de caractères).
Méthode livrer ->
Ajoutez une méthode livrer qui met à jour le statut de la livraison à "Livré".
Instanciation et Affichage ->
Instanciez la classe Livraison avec des valeurs d'adresse et de date de livraison.
Affichez les informations de la livraison en utilisant les méthodes getter.
Mise à jour du statut ->
Appelez la méthode livrer pour simuler la livraison de la commande.
Affichez le nouveau statut de livraison en utilisant la méthode getter.
N'oubliez pas d'inclure des instructions spécifiques pour l'affichage des données à différentes étapes de l'exercice, telles que "Affichez les informations de la livraison après l'instanciation" et "Affichez les informations mises à jour après l'appel de la méthode livrer".
*/

class Livraison
{
    public $_adresse;
    public $_dateLivraison;
    public $_statut;


    public function __construct($adresse, $dateLivraison)
    {
        $this->setterAdresse($adresse);
        $this->setterDateLivraison($dateLivraison);
    }

    public function setterAdresse($adresse)
    {
        if(is_string($adresse))
        {
            $this->_adresse = $adresse;
        }
        else
        {
            return false;
        }

    }

    public function setterDateLivraison($dateLivraison)
    {
        if(is_string($dateLivraison))
        {
            $this->_dateLivraison = $dateLivraison;
        }
        else
        {
            return false;
        }
    }

    /* public function isValidDate($date)
    {
        return (strtotime($date) !== false);  
    }   

        public function setterDateLivraison($dateLivraison)
            {
            if($this->isValidDate($date) !== false)
            {
            $this->_dateLivraison = $dateLivraison;
            }
            else
            {
                return false;
            }

            } */
        
    public function setterStatut($statut)
    {
        if(is_bool($statut))
        {
            $this->_statut = $statut;
        }
        else
        {
            return false;
        }
    }
        
    public function getterAdresse()
    {
        return $this->_adresse;   
    }

    public function getterDateLivraison()
    {
        return $this->_dateLivraison;   
    }

    public function getterStatut()
    {
        return $this->_statut;   
    }
}


$livraison = new Livraison("9 rue de La Rochette 77000 Melun", "20-12-2023");

echo $livraison->getterAdresse() . "\n";
echo $livraison->getterDateLivraison() . "\n";
echo $livraison->getterStatut() . "\n";

?>