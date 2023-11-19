<?php

/*- Exercici 1
Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.*/

$array1 = [2, 78, 8.5, 10, 9.9];
$array2 = [9.9, 8, 7];

echo "array intersect" . PHP_EOL;
print_r(array_intersect($array1 , $array2));
echo "array merge" . PHP_EOL;
print_r(array_merge($array1 , $array2));

/*- Exercici 2
Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, 
com la nota mitjana de la classe sencera. */

$class = [
    'Phil' => [6,6,7,5,8],
    'Claire' => [9,8,10,8,8],
    'Luke' => [4,5,6,4,4],
    'Alex' => [10,10,10,10,10],
    'Haley' => [5,6,5,7,8],
];

function showClassAverageNote($class) {
    $total = 0;
    $totalNotesCount = 0;
    foreach ($class as $key => $student) {       
        echo "Student $key  " . array_sum($student)/ count($student) . PHP_EOL;
        $total += array_sum($student);
        $totalNotesCount += count($student);
    }
    echo "All student's average  " . $total/$totalNotesCount . PHP_EOL ;
}

showClassAverageNote($class);