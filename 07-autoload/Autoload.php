<?php

function inclusionAutomatique($nomClasse)
{
    require_once($nomClasse . ".class.php");
    echo "On passe dans inclusionAutomatique ! \n";
    echo "require($nomClasse.class.php) .\n";
}

spl_autoload_register("inclusionAutomatique");
/* spl_autoload_register() permet d'exécuter une fonction lorsque l'interpréteur (=le script) voit passer le mot "new" dans le code. 
Le nom qui suit "new" est récupéré et automatiquement transmis à la fonction inclusionAutomatique*/



?>