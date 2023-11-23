<?php
/* Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. 
Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duracio
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
 */

class Cinema {
    private $name;
    private $city;
    private $movies;

    static $cines = array();
    public function __destruct()
    {
        unset(self::$cines[array_search($this, self::$cines, true)]);
    }

    public function __construct($name, $city) {
        $this->name = $name;
        $this->city = $city;
        self::$cines[] = $this;
    }
    public function getCity() {
        return $this->city;
    }

    public function getName() {
        return $this->name;
    }

    public function getMovies() {
        return $this->movies;
    }

    public function setMovie($movie) {
        $this->movies[] = $movie;
    }

    public function getMaxDurationMovie() {
        $result = array_reduce($this->movies, function($a, $b){
            return $a ? ($a->getDuration() > $b->getDuration() ? $a : $b) : $b;
        });
        return $result;
    }

    public static function getAllMovies() {
        $movies = [];  
         
        foreach(self::$cines as $instance) {            
            $movies[] = $instance->getMovies();          
        }
        $movies = array_merge(...$movies);        
        return $movies;
    }

    public static function getMoviesByDirector($director) {    
        $movies = self::getAllMovies();
        
        $filtered = array_filter($movies , function($obj) use ($director){            
            if ($obj->getDirector()== $director) {
                return true;
            }            
        });
        
       //todo filter duplicates
        return $filtered;
    }

    private function filterDuplicates($movies) {

    }
}