
<?php

class Movie{
    public $genere;
    public $titolo;
    public $dataUscita;
    public $regista;

    public function __construct($_genere, $_titolo) {
        $this->genere = $_genere;
        $this->titolo = $_titolo;
    }

    public function getLenghtString() {
        return strlen($this->titolo);
    }
}

$shrekMovie = new Movie('Commedy, Cartoon', 'Shrek');




var_dump($shrekMovie);
var_dump($shrekMovie->getLenghtString());
