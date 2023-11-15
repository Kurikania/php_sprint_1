<!DOCTYPE html>

<html lang="es">

<head>
    <title>Sprint 1. Php basicos (Tema 2).</title>
    <meta charset="utf-8">
    <meta name="description" content="Php basics (Tema 2). Sprint 1. Nivel 1.">
    <meta name="keywords" content="php html5">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <!-- para la vizualuzacion rapida utilicé en VSCode https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver -->
    <style>
        .section {
            padding: 8px;
            border: 1px solid black;
            border-radius: 16px;
            margin-bottom: 10px;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php
    /*- Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/
    $int = 1;
    $doub = 3.1456;
    $str = "test";
    $isChecked = true;
    echo ("<div class='main'> 
        <div class='section'>

        <div>Var integer: $int  </div>

        <div>Var double: $doub </div>

        <div>Var string: $str </div>

        <div>Var boolean: </div>");
    var_dump($isChecked);
    echo ("</div> ");

    define("CONST_NAME", "Ekaterina");
    echo ("<h1><b>" . CONST_NAME . "</b></h1>");

    /*  Exercici 2
        Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després:
        Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
        Imprimeix per pantalla la mida (longitud) de la variable.
        Imprimeix per pantalla l'string en ordre invers de caràcters.
        Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings. 
    */

    $text_line = "Hello, World!";
    echo ("<div class='section'>
        $text_line <br> ");
    $text_line = strtoupper($text_line);
    echo ($text_line . '<br>' .
        strlen($text_line) . '<br>' .
        strrev($text_line) . '<br>');
    $text_line_php = "Aquest és el curs de PHP";
    echo ("{$text_line} {$text_line_php}
        </div>");


    /*
            - Exercici 3
            Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. 
            A continuació, mostra per pantalla per a X i Y:

            El valor de cada variable.
            La suma.
            La resta.
            El producte.
            El mòdul.
            Per N i M realitzaràs el mateix.

            Per a totes les variables (X, Y, N, M)

            El doble de cada variable.
            La suma de totes les variables.
            El producte de totes les variables.

            b) Crea una funció Calculadora que entri dos nombres per paràmetre, 
            i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació 
            o la divisió dels dos nombres.
        */

    $X = 8;
    $Y = 5;
    $N = 5.8;
    $M = 8.5;

    echo ("<div class='section'>
        Variable X = {$X}, Variable Y = {$Y} <br/> 
        X + Y = " . $X + $Y . " <br/> 
        X - Y = " . $X - $Y . " <br/> 
        X * Y = " . $X * $Y . " <br/> 
        X % Y = " . $X % $Y . " <br/> 
        </div>");


    echo ("<div class='section'>
        Variable N = {$N}, Variable M = {$M} <br/> 
        N + M = " . $N + $M . " <br/> 
        N - M = " . $N - $M . " <br/> 
        N * M = " . $N * $M . " <br/> 
        N % M = " . $N % $M . " <br/> 
        </div> ");

    echo ("<div class='section'>
        El doble de cada variable  <br/>
        X * 2 = " . $X * 2 . " <br/> 
        Y * 2 = " . $Y * 2 . " <br/> 
        N * 2 = " . $N * 2 . " <br/> 
        M * 2 = " . $M * 2 . " <br/> 
        </div> 
    
        <div class='section'>
        La suma de totes les variables  <br/> 
        X + Y +  N + M =" .  $X + $Y +  $N + $M . " <br/> 
        El producte de totes les variables <br/> 
        X * Y *  N * M =" .  $X * $Y * $N * $M . "
        </div>
        ");

        enum Operator
        {
            case Suma;
            case Resta;
            case Multiplicacio;
            case Divisio;
        }
        function calculadora($num1, $num2, $operator) {
            switch($operator) {
                case Operator::Suma: 
                    return $num1 + $num2;
                case Operator::Resta: 
                    return $num1 - $num2;
                case Operator::Multiplicacio: 
                    return $num1 * $num2;        
                case Operator::Divisio: 
                    return $num1 / $num2;
            }
        }
        echo  "<h4> Calculadora </h4>";
        echo calculadora(5, 2 , Operator::Suma) . PHP_EOL;
        echo calculadora(5, 2 , Operator::Resta) . PHP_EOL;
        echo calculadora(5, 2 , Operator::Multiplicacio) . PHP_EOL;
        echo calculadora(5, 2 , Operator::Divisio) . PHP_EOL;

    ?>

<div class="section">
            <h4>
                - Exercici 4
                Fes un programa que implementi una funció on es compti fins a un nombre determinat. <br>
                Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10.  <br>
                A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). <br>
                El compte s’ha de mostrar per pantalla pas per pas.

            </h4>

            <form action="nivel_1.php" method="get">
                <label for="value">Enter a number:</label>
                <input id="value" type="number" name="number">
                <br>

                <label for="value2">Indiqui de quant a quant es compta</label>
                <input id="value2" type="number" name="frequencia">
                <br>

                <input type="submit" name="submit1" value="Count">
                <br>
            </form>
            
            <?php
            $number = isset($_GET["number"]) && $_GET["number"] > 0 ? intval($_GET["number"]) : null;
            $frequencia = isset($_GET["frequencia"]) && $_GET["frequencia"] > 0 ? intval($_GET["frequencia"]) : 1;
            $submit = isset($_GET["submit1"]) ? $_GET["submit1"] : null;
            function countToValue($frequencia, $val=10,)
            {
                
                for ($i = 0;($i <= $val); $i = $i + $frequencia) {
                   echo $i . " "  ;  
                   echo "<br/> ";
                }
            }

            $result = null;
            if (empty($submit)) {
                echo (" ");
            } else if($number) {
                echo ("<div class='bold'>  Lets count to " . $number . " (D'. $frequencia . en . $frequencia .) </div> ");
                countToValue($frequencia, $number);
            } else  {
                countToValue($frequencia);
            }
            ?>

        </div>


    <div class="section">
        <h4>
            - Exercici 5
            Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
        </h4>
        Condicions:
        <ul>
            <li>
                Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
            </li>
            <li>
                Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
            </li>
            <li>
                Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
            </li>
            <li>
                Si la nota és menor a 33%, l'estudiant reprovarà.
            </li>

        </ul>
        <form action="nivel_1.php" method="get">

            <label for="value">Enter a number:</label>
            <input id="value" type="number" name="number2">
            <br>
            <input type="submit" name="submit2" value="Check">
            <br>
        </form>
        <?php
        $number2 = isset($_GET["number2"]) ? $_GET["number2"] : null;
        $submit2 = isset($_GET["submit2"]) ? $_GET["submit2"] : null;
        function checkNote($val)
        {
            switch ($val) {
                case $val >= 60:
                    echo "Primera Divisió";
                    break;
                case $val <= 59 && $val >= 45:
                    echo "Segona Divisió";
                    break;
                case $val >= 33 && $val <= 44:
                    echo "Tercera Divisió";
                    break;
                case $val < 33:
                    echo "l'estudiant reprovarà";
                    break;
                default:
                    break;
            }
        }

        $result = null;
        if (empty($number2) && empty($submit2)) {
            echo (" ");
        } else {
            echo ("<div class='bold'>  The note is " . $number2 . " </div> ");
            checkNote($number2);
        }
        ?>
    </div>

    <div class="section">
        <h4>
            - Exercici 6
            Charlie em va mossegar el dit!
            Charlie et mossegarà el dit exactament el 50% del temps.
        </h4>

        <form action="nivel_1.php" method="get">
            <input type="submit" name="submit3" value="Check Charlie">
            <br>
        </form>

        <?php
        $value = isset($_GET["submit3"]) ? $_GET["submit3"] : null;
        function isBitten()
        {
            return rand(0, 1) > 0.5;
        }
        if (empty($value)) {
            echo (" ");
        } else {
            $res = isBitten() ? 'bitten' : 'intact';
            echo ("<div class='bold'> The finger is $res   </div> ");
        }
        ?>
    </div>

</body>

</html>