<?php
/* 
- Exercici 1
El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, 
de tal forma que puguem invocar la funció per a un número concret. 
*/

/*
Determinemos, mediante el siguiente ejemplo, el proceso para determinar la lista de los números primos menores de 20.
Primer paso: listar los números naturales comprendidos entre 2 hasta el número que se desee, en este caso, hasta el 20.
2. Segundo paso: se toma el primer número no rayado ni marcado, como número primo.
3. Tercer paso: se tachan todos los múltiplos del número que se acaba de indicar como primo.
4. Cuarto paso: si el cuadrado del primer número que no ha sido rayado ni marcado es inferior a 20, entonces se repite el segundo paso. 
Si no, el algoritmo termina, y todos los enteros no tachados son declarados primos.
Como 3² = 9 < 20, se vuelve al segundo paso:
En el cuarto paso, el primer número que no ha sido tachado ni marcado es 5. 
Como su cuadrado es mayor que 20, el algoritmo termina y se consideran primos todos los números que no han sido tachados.
Como resultado se obtienen los números primos comprendidos entre 2 y 20, y estos son: 2, 3, 5, 7, 11, 13, 17, 19.
*/


function findPrimes(int $range): array
{
    // deberia haber puesto el 2 como ek inicio, pero asi no tengo keys iguales a valores. Es probable que no deberia haber usado el array aqui.
    $numbers = range(0, $range); 
    //Primer paso: listar los números naturales comprendidos entre 2 hasta el número que se desee,
    $numbers[0] = false;
    $numbers[1] = false;
    $p = 2; //segundo paso (1)

    while ($p ** 2 < $range) { // Como 3² = 9 < 20, se vuelve al segundo paso
        if($numbers[$p] !== false) {  //Cuarto paso
            for($j=$p*$p; $j<=$range; $j+=$p){ // p=2 $j=$p*$p=4 , j+=$p 6-8-10...
                // print_r("j - " .$j .PHP_EOL);                
                $numbers[$j] = false; //Tercer paso: se tachan todos los múltiplos del número que se acaba de indicar como primo 
            }
        }
        $p++; //segundo paso (2)
    }

    return $numbers;
}

print_r(findPrimes(20));

print_r(findPrimes(100));

/*
function findPrimes(int $range) : array {
    $p = 2;
    $numbers = range(2, $range);
    $primeNumbers = [];
    foreach ($numbers as $number) {
        if (isPrime($number)) $primeNumbers[] = $number; 
    }
    return $primeNumbers;
}

function isPrime($number) {
    $n = 0;
    for($i = 2; $i <= ($number/2); $i++) {
      if($number % $i == 0){
        $n++;
        break;
      }
    }
    return $n == 0;
  }


print_r(findPrimes($number));

print_r(findPrimes(25));
*/