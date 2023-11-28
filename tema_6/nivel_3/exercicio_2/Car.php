<?php
require_once __DIR__."/traits/Turbo.php";
/* 
(marca, matrícula, tipus de combustible, velocitat màxima). 
A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. 
Usa aquest mètode des de la classe Car
*/
class Car {
    use Turbo;
    private string $marca;
    private string $matricula;
    private string $combustibleType; // utilizar Enum?
    private int $velocitatMax;

    public function __construct($marca, $combustibleType, $velocitatMax) {
        $this->marca = $marca;
        $this->combustibleType = $combustibleType;
        $this->velocitatMax = $velocitatMax;
    }
}