<?php

final class Application // Les classes finales ont pour but d'empêcher l'héritage. Exemple : en cas de données sensibles, on empêche ainsi qu'elles soient modifiées. 
{
    public function lancementApplication()
    {
        return "L'appli se lance comme cela";
    }
}

$app = new Application;  // La classe finale est instanciable. 
echo $app->lancementApplication();

//  class Extension extends Application {}  : ne fonctionne pas. On ne peut pas hériter d'une classe finale.  

class Application2
{
    final public function lancementApplication()
    {
        return "L'appli se lance comme cela";
    }

}

class Extension2 extends Application2
{
//   public function lancementApplication(){}  
//  Une méthode finale ne peut pas être surchargée, c'est à dire redéfinie dans une classe héritière. 
}

/*
    - Une classe finale ne peut pas être héritée, elle empêche de faire un héritage dans une autre classe. 
    - Une méthode finale permet d'éviter qu'elle ne soit redéfinie ou surchargée.
    - L'intérêt de mettre le mot-clé "final" sur une méthode est de la verrouiller afin d'empêcher toute sous-classe de la redéfinir.  (Quand nous voulons être sûr que le comportement d'une méthode soit préservé durant l'héritage. Un héritage est possible si final est placé sur la méthode et pas sur la classe, mais le comportement de la méthode ne doit pas être modifié).
*/