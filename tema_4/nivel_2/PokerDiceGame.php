<?php

require __DIR__."/PokerDice.php";
class PokerDiceGame {
    protected $dices = array(); 
    public $gameRound = 0;

    public function __construct() {
        for($i=0; $i<5; $i++) {
            $this->dices[] = new PokerDice($i);    
        }    
    }
    public function __destruct()
    {
        unset($this->dices[array_search($this, $this->dices, true)]);
    }
    public function getDicesInfo():string {
        $string = 'Round ' . $this->gameRound . PHP_EOL;
        foreach($this->dices as $instance) {            
            $string .= $instance->diceIndex ." - ". $instance->getShapeName() . PHP_EOL;      
       }
        return $string;
    }
    public function throwAll() {
        foreach($this->dices as $instance) {            
             $instance->throw();          
        }
        $this->gameRound++;
    }
    public function getDiceByIndex($index) {
        return $this->dices[$index];
    }
    public function getTotalThrows() {
        $counter = 0;    
        foreach($this->dices as $instance) {            
            $counter += $instance->totalThrows;          
        }
        return $counter;
    }
}