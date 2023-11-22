<?php
/*Cada pel·lícula té un nom, una duració, i un director/a. */

class Movie {
    private $name;
    public $duration;
    private $director;
    
    public function __construct($name, $duration, $director) {
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getDirector() {
        return $this->director;
    }
    
}