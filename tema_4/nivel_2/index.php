<?php
require __DIR__."/PokerDice.php";

$dices = [];

for ($index = 0; $index <= 4; $index++) {    
    $dices[] = new PokerDice($index);
    $dices[$index]->throw(); 
    print_r ($dices[$index]->diceIndex . "  " . $dices[$index]->shapeName().PHP_EOL);
}
$dices[0]->throw(); 
$dices[0]->throw(); 

print_r("get Total Throws " . $dices[0]->getTotalThrows());