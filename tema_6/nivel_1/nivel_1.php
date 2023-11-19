<?php
    /*- Exercici 1
Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). 
El formulari ha de tenir com a action un document PHP. 
El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals.


- Exercici 2
Millora l’exercici anterior fent que es guardi l’username en una variable de sessió. S’haurà de mostrar l’username per pantalla mitjançant l’accés a aquesta variable de sessió.

 */


echo $_POST['name'] . "<br>";
echo $_POST['username'] . "<br>";


session_start(); 

$_SESSION['name']=  $_POST['name'];
$_SESSION['username']=  $_POST['username'];

echo "Seccion name " . $_SESSION['name'] . "<br>";
echo "Seccion username " . $_SESSION['username'] . "<br>";

echo "Seccion id " .session_id(). "<br>";

?>