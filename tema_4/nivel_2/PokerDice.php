<?php

/*Crea la classe PokerDice. 
Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus. */

class PokerDice {
    public $figures = ["As", "K", "Q", "J", "7" , "8"];
    public $currentThrow;
    public $totalThrows =0;
    public $diceIndex=0;

    protected static $_instances = array();

    public function __construct($diceIndex) {
        self::$_instances[] = $this;
        $this->diceIndex = $diceIndex;
    }
    public function __destruct()
    {
        unset(self::$_instances[array_search($this, self::$_instances, true)]);
    }

    public function throw() {
        $this->currentThrow = rand(0,5);
        $this->totalThrows++; 
    }
    public function shapeName() {
        if ($this->currentThrow) {            
            return $this->figures[$this->currentThrow];
        }
    }

     public function getTotalThrows() {
        $counter = 0;    
        foreach(self::$_instances as $instance) {            
            $counter += $instance->totalThrows;          
        }
        return $counter;
    }

}