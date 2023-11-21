<?php 
namespace App\Grado;

use function PHPUnit\Framework\returnSelf;

/* Practicamos algo de TDD. Recuerda el ejercicio 5 del nivel de PHP Básicos y piensa tests que podrías realizar para probar su correcto funcionamiento. 
Programa y después realiza el programa a testear paso a paso según validas los test previamente creados. */

function checkNote($val)
{
    switch ($val) {
        case !is_numeric($val):
            return "Error. Please enter a numeric value";  
        case $val > 100:
            return "Error. Value should not exceed 100";  
        case $val < 0:
                return "Error. Value should not be less 0";      
        case $val >= 60:
            return "Primera Divisió";          
        case $val <= 59 && $val >= 45:
            return "Segona Divisió";            
        case $val >= 33 && $val <= 44:
            return "Tercera Divisió";            
        case $val < 33:
            return "l'estudiant reprovarà";    
        default:
            return "Error. Please check inpunt";  
    }
}

