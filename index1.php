<?php

//creazione classe
class Movie{

    // variabili/attributi
    public $title;
    public $director;
    public $box_office = 0;
    public $description ='';

    //metodo costruttore
    function __construct($_title, $_director, $_box_office){
        $this->title = $_title;
        $this->director = $_director;
        $this->box_office = $_box_office;
    }

    // creazione metodo
    public function setDescription($runtime,$IMDb_rating){

        // descrizione in base alla durata
        if($runtime >= 200){
            $this->description='Cancel your schedule and prepare the popcorn, this movie is going to be a long journey! ';
        }elseif($runtime < 200 && $runtime > 100){
            $this->description='Turn off the lights and mute your cell phone, the movie won\'t last long. ';
        }else{
            $this->description='Take a little break and watch this movie. ';
        }

        // Descrizione in base al rating
        if ($IMDb_rating >= 8) {
            $this->description=$this->description . 'Critically acclaimed. ';
        }else{
            $this->description=$this->description . 'Moderately appreciated. ';
        }
    }

    public function getDescription(){
        return $this->description;
    }
}

//creazione istanze della classe
$movie1 = new Movie('Back to Future', 'Robert Zemeckis', 499);
$movie1->setDescription(116,9);

// var_dump($movie1);

$movie2 = new Movie('The Lord of the Rings: The Return of the King', 'Peter Jackson', 700);
$movie2->setDescription(201,6);

// var_dump($movie2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .movie{
            background:lightgrey;
            border:1px solid black;
            margin:20px 0;
            padding:10px;
        }
    </style>
</head>
<body>

    <div class="movie">
        <h2> <?php echo $movie1->title; ?></h2>
        <h3> Directed by <em> <?php echo $movie1->director; ?></em></h3>
        <p> <?php echo $movie1->description; ?></p>
        <span> Incassi: <?php echo $movie1->box_office; ?> m</span>
    </div>

    <div class="movie">
        <h2> <?php echo $movie2->title; ?></h2>
        <h3> Directed by <em> <?php echo $movie2->director; ?></em></h3>
        <p> <?php echo $movie2->description; ?></p>
        <span> Incassi: <?php echo $movie2->box_office; ?> m</span>
    </div>


</body>
</html>
