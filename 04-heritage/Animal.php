<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }
    public function mange()
    {
        return "Je mange chaque jour";
    }
} 

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Eléphant et " . $this->deplacement();
    }

}

class Chat
{
    public function quiSuisJe()
    {
        return "Je suis un Chat ";
    }
    public function mange()
    {
        return "Je mange comme un chat";
    }
}

$elephant = new Elephant;
echo $elephant->mange() . "\n";
echo $elephant->quiSuisJe() . "\n";

// USE classe Elephant
// 1 - afficher "je mange chaque jour"
// 2 - afficher "Je suis un Elephant et je me deplace"

// Use classe Chat
// 1 - afficher "je mange comme un chat
// 2 - afficher "Je suis un chat"

$chat = new Chat;
echo $chat->mange() . "\n";
echo $chat->quiSuisJe() . "\n";