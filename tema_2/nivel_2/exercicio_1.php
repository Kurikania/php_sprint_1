<?php 
    function countCallCost(int $val): string
    {
        $standartTime = 3;
        $additinalTimeCostPerMinute = 5;
        $standartCost = 10;

        if ($val <= $standartTime) {
            return $standartCost;
        } else {
            $additinalTime = $val - $standartTime;
            return $standartCost +  $additinalTime * $additinalTimeCostPerMinute;
        }
    }
    $duration = isset($_GET["duration"]) ? intval($_GET["duration"]) : null;
    $submit = isset($_GET["submit"]) ? $_GET["submit"] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sprint 1. Php basicos (Tema 2).</title>
    <meta charset="utf-8">
    <meta name="description" content="Php basics (Tema 2). Sprint 1. Nivel 2">
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
    <div class='main'>

        <div class="section">
            <h4>
                Exercici 1
            </h4>
            <div>
                Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
                <ul>
                    <li>
                        Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
                    </li>
                    <li>
                        Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
                    </li>
                </ul>
            </div>

            <form action="exercicio_1.php" method="get">
                <label for="value">Enter the call duration:</label>
                <input id="value" type="number" name="duration">
                <br>

                <input type="submit" name="submit" value="Count">
                <br>
            </form>

            <?php if($duration): ?>            
                 <div class='bold'>  Call cost of  <?= $duration ?>  minutes </div> 
                 <div class='bold'> <?=  countCallCost($duration)  ?> centims </div> 
            <?php endif; ?>
    
        </div>
    </div>
</body>
</html>