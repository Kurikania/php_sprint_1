<?php
/*
- Exercici 1
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().


25-11-23

Hola, Katia!

El nivel 1 es correcto.

El nivel 2, no del todo. Estás declarando varias veces las propiedades de altura y base en las subclases.

El nivel 3 se extiende un poco esta situación aunque amplias de manera correcta las subclases.



*/
namespace Shape;
abstract class Shape {
    protected $base;
    protected $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    abstract public function calculateArea();
}

class Triangle extends Shape {

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    public function calculateArea() {
        return $this->base * $this->height;
    }
}

/*
Nivel 3
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per 
representar un Cercle i el seu corresponent càlcul d’àrea. 
pi r^{2}.
*/

class Cercle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * $this->radius**2;
    }
}



$triangle = new Triangle(5, 7);
echo $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(8, 6);
echo $rectangle->calculateArea() . "\n";

$cercle = new Cercle(8);
echo $cercle->calculateArea() . "\n";

?>
