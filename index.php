<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $lang;
    public $duration;

    function __construct($title, $genre, $year, $lang, $duration)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->lang = $lang;
        $this->duration = $duration;
    }

    public function print()
    {
        return
            "Title: $this->title; 
            Genre: $this->genre;
            Year: $this->year;
            Lang: $this->lang;
            Duration: $this->duration min;";
    }
}


$new_movie = new Movie("Avengers: Age of Ultron", "action", "2015", "EN", "141");

var_dump($new_movie);
