
<?php

/**
 * generete a single movie
 */
class Movie{
    public $genere;
    public $titolo;
    public $dataUscita;
    public $regista;

    /**
     * Construct new movie
     *
     * @param string $_genere what type a movie
     * @param string $_titolo film titol
     */
    public function __construct(string $_genere, string $_titolo) {
        $this->genere = $_genere;
        $this->titolo = $_titolo;
    }

    public function getLenghtString() {
        return strlen($this->titolo);
    }
}

$shrekMovie = new Movie('Commedy, Cartoon', 'Shrek');
$cenerentolaMovie = new Movie('Cartoon', 'Cenerentola');



var_dump($shrekMovie, $cenerentolaMovie);
var_dump($shrekMovie->getLenghtString(), $cenerentolaMovie->getLenghtString());
