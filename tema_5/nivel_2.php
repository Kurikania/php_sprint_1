<?php
/*
- Exercici 1
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/
namespace Shape;
abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$triangle = new Triangle(5, 7);
echo $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(8, 6);
echo $rectangle->calculateArea() . "\n";

?>
