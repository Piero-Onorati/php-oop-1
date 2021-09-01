<?php

//creazione classe
class Movie{

    // variabili/attributi
    public $title;
    public $director;
    public $runtime;
    public $IMDb_rating;
    public $box_office;

    //metodo costruttore
    function __construct($_title, $_director){
        $this->title = $_title;
        $this->director = $_director;
    }
}

//creazione istanze della classe
$movie1 = new Movie('Back to Future', 'Robert Zemeckis');

var_dump($movie1);