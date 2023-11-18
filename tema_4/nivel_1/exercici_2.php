<?php
/*- Exercici 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun. */

class Shape {
    protected $width;
    protected $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape {
    public function area() {
        return 1/2 * $this->width * $this->height;
    }
} 

class Rectangle extends Shape {
    public function area() {
        return $this->height * $this->width;
    }
} 


echo( "Shapes \n");

$triangle = new Triangle(8,5);
echo( $triangle->area(). "\n");

$rectangle = new Rectangle(8,5);
echo( $rectangle->area(). "\n");