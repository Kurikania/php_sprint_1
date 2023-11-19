<?php
/*- Exercici 1
Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer i el directori del fitxer utilitzant constants màgiques.
*/

class Utils {
    public function getFile() {
        return __FILE__;
    }
    public function getDir() {
        return __DIR__;
    }
}

$utils = new Utils();
echo $utils->getDir() . "\n";
echo $utils->getFile() . "\n";


/*
- Exercici 2
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
*/
class TestMethods {
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' " . implode(', ', $arguments). "\n";
    }
    public function test() {
        echo "test \n";
    }
}

$obj = new TestMethods();
$obj->runTest('with test arguments');
$obj->test();