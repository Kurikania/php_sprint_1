<?php 

/*
- Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
*/
$integers = [874,4,8,23,875];
foreach ($integers as $integer) {
    echo "Current value of \$integer: $integer.\n";
}

/* - Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, 
les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.
*/

$X = array (10, 20, 30, 40, 50,60);
echo "Array length " . count($X) . "\n";

unset($X[2]);
echo "Array after unset " . count($X) . "\n";
print_r($X);

$X = array_values($X);
print_r($X);

/* - Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

//Please note that, if you have empty string ("") in your $needle, str_contains will always return true.
function isEachElementContainElement($array, $element) {
    $element = strtolower($element);
    if(empty($array)) return false; 

    foreach ($array as $word) {
        $word = strtolower($word);
        if (!str_contains($word, $element)) return false;    
    }
    return true; 
}

function displayTestResult($array, $element) {
    echo isEachElementContainElement($array, $element) ? "each element contains {$element} " . "\n" : "no match for  {$element} " . "\n";
}

$testElement1 = "h";
$testElement2 = "u";
$testArray1 = ["hola", "Php", "Html"];
$emptyArray = [];
$emptyString = "";
$arrayWithEmptyValue= ["hola", "", "Html"];


displayTestResult($testArray1, $testElement1);
displayTestResult($testArray1, $testElement2);
displayTestResult($emptyArray, $testElement2) ;
displayTestResult($testArray1, $emptyString) ;
displayTestResult($arrayWithEmptyValue, $emptyString) ;

/* - Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
nom
edat
email
menjar favorit */

$facts = [
    'nom' => 'Ekaterina', 
    'edat' => 31,
    'email' => 'caterina.shoshina@gmail.com',
    'menjar' => 'lasaña'
];

foreach($facts as $fact => $fact_value) {
    echo "Key=" . $fact . ", Value=" . $fact_value;
    echo PHP_EOL;
  }

?>