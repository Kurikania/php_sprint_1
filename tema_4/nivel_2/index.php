<?php
require __DIR__."/PokerDiceGame.php";

/*
2-1: No veo correcto que dentro de una clase que representa un dado, contengas instancias de varios dados. 
Es un poco ilógico. El resto de la lógica de la clase está muy bien. 
Te diría que pensaras en mejorar como representas el total de tiradas de todos los dados, 
y también pensar sí todos los dados tienen las mismas caras en este programa.
*/ 

$diceGame = new PokerDiceGame();
$diceGame->throwAll();

echo "Get Dices Info" . PHP_EOL;
print_r($diceGame->getDicesInfo());


echo "Get Dice By Index (1) + Get Shape Name" . PHP_EOL;
print_r($diceGame->getDiceByIndex(1)->getShapeName(). PHP_EOL) ;

$diceGame->throwAll();
echo  PHP_EOL;
echo "Get Dices Info" . PHP_EOL;
print_r($diceGame->getDicesInfo());


echo "Get Dice By Index (4) + Get Shape Name" . PHP_EOL;
print_r($diceGame->getDiceByIndex(4)->getShapeName(). PHP_EOL) ;

echo "Get Total Throws" . PHP_EOL;
print_r($diceGame->getTotalThrows(). PHP_EOL);