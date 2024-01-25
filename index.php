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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="card col-4" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $shrekMovie->titolo?></h5>
                        <p class="card-text"><?php echo $shrekMovie->genere?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>

    </main>
</body>

</html>