<?php

/*Crea la classe PokerDice. 
Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus. */


class PokerDice {
    public $figures = ["As", "K", "Q", "J", "7" , "8"]; //y también pensar sí todos los dados tienen las mismas caras en este programa. (utilizar enum?)
    public $currentThrow;
    public $totalThrows =0;
    public $diceIndex=0;

   // protected static $_instances = array(); //No veo correcto que dentro de una clase que representa un dado, contengas instancias de varios dados. 

    public function __construct($index) {
        $this->diceIndex = $index;
    }

    public function throw() {
        $this->currentThrow = rand(0,5);
        $this->totalThrows++; 
    }
    public function getShapeName() {     
        return $this->figures[$this->currentThrow];
    }

}