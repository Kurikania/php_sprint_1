<?php
/*
- Ejercicio 1
Dado un array de enteros, haz un programa que:

Devuelva cada valor del array elevado al cubo utilizando la función array_map().
*/

$enteros = [2, 85, 78, 55, 87];
$cubos = array_map(function ($n) {
    return ($n * $n * $n);
}, $enteros);

print_r($cubos);

/*- Ejercicio 2
Dado un array de strings, haz un programa que:

Devuelva un array donde sólo estén los strings que tengan un nombre par de caracteres usando la función array_filter().
*/

$stringsCyr = ['каждый', 'охотник', 'желает', 'знать', 'где', 'сидит', 'фазан'];
$stringsLat = ['Phil', 'Claire', 'Luke', 'Alex', 'Haley'];
function isPar($string) {
    return mb_strlen($string) % 2 == 0;
}

$filteredStrings = array_filter($stringsCyr, 'isPar');
$filteredStringsLat = array_filter($stringsLat, 'isPar');

print_r($filteredStrings) ;
print_r($filteredStringsLat) ;

/*
- Ejercicio 3
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().
*/

$enteros = [2, 7, 85, 78, 55, 87, 11];
function isPrime($MyNum) {
    $n = 0;
    for($i = 2; $i < ($MyNum/2+1); $i++) {
      if($MyNum % $i == 0){
        $n++;
        break;
      }
    }
    return $n == 0;
  }

function sum($carry, $item)
{
    if(isPrime($item)) $carry += $item;
    return $carry;
}

$suma = array_reduce($enteros, "sum");

print_r($suma);