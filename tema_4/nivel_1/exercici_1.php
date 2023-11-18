<?php

/* Nivell 1
- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).

*/
class Employee
{
    protected $nom;
    protected $sou;

    public function initialize($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function print()
    {
        echo $this->nom ."\n";
        if ($this->sou > 6000) {
            echo "hay que pagar impuestos \n";
        }
    }
}

$empl = new Employee();
$empl->initialize("Kate", 7000);
$empl->print();

$empl2 = new Employee();
$empl2->initialize("Xavi", 1500);
$empl2->print();
