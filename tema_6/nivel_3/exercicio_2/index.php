<?php 
require_once __DIR__."/Car.php";
require_once __DIR__."/Ordenador.php";
/*
- Exercici 2
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). 
A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. 
Usa aquest mètode des de la classe Car.
*/

$car = new Car('Жигули', 'wood' , 80);
echo $car->boost();

$ordenador = new Ordenador('Intel', 1997, 'Pentium II');
echo $ordenador->boost();