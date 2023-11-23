<?php

$xocolataAmount = isset($_GET["xocolata"]) ? intval($_GET["xocolata"]) : 0;
$xicletsAmount = isset($_GET["xiclets"]) ? intval($_GET["xiclets"]) : 0;
$caramelsAmount = isset($_GET["caramels"]) ? intval($_GET["caramels"]) : 0;
$submit = isset($_GET["submit"]) ? $_GET["submit"] : null;


$xocalataPrice = 1;
$xicletsPrice = 0.5;
$caramelPrice = 1.5;

$order = [
    [
        'price' => $xocalataPrice,
        'amount' =>  $xocolataAmount,
        'name' => 'xocalata'
    ],
    [
        'price' => $xicletsPrice,
        'amount' =>  $xicletsAmount ,
        'name' => 'xiclets'
    ],
    [
        'price' => $caramelPrice,
        'amount' =>  $caramelsAmount,
        'name' => 'caramel'
    ]
];
function countSubtotal(int $val, float $price)
{
    return $val * $price;
}

function countTotal(array $order): float
{
    return array_reduce($order, function ($sum, $a) {
        return $sum += countSubtotal($a['amount'], $a['price']);
    }, 0);
}

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
                Exercici 2
            </h4>
            <div>
                Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:
                <ul>
                    <li>
                        Xocolata: 1 euro
                    </li>
                    <li>
                        Xiclets: 0,50 euros
                    </li>
                    <li>
                        Caramels: 1,50 euros
                    </li>
                </ul>

                Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem: <br>

                2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:<br>

                funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5 <br>

                Sent, per tant, el total, 4.<br>

            </div>
            <br>
            <br>
            <form action="exercicio_2.php" method="get">
                <label for="xocolata">Xocolata</label>

                <input id="xocolata" type="number" name="xocolata">
                <br>

                <label for="value">Xiclets</label>
                <input id="" type="number" name="xiclets">
                <br>

                <label for="caramels">Caramels</label>
                <input id="caramels" type="number" name="caramels">
                <br>

                <input type="submit" name="submit" value="Count">
                <br>
            </form>


            <?php if ($submit) : ?>
                <table>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Subtotal</th>
                    </tr>

                    <?php foreach ($order as $orderItem) : ?>
                        <tr>
                            <td><?= $orderItem['name'] ?></td>
                            <td><?= $orderItem['price'] ?></td>
                            <td><?= $orderItem['amount'] ?></td>
                            <td><?= countSubtotal($orderItem['amount'], $orderItem['price']) ?></td>
                        </tr>

                    <?php endforeach; ?>

                    <tr>
                        <td>Total</td>
                        <td><?= countTotal($order) ?></td>
                    </tr>
                </table>

            <?php endif; ?>

        </div>

    </div>

</body>

</html>