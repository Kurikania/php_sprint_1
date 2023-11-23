<?php

require __DIR__ . "/Cinema.php";
require __DIR__ . "/Movie.php";
/*
- Exercici 1
Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. 
Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. 
Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.
*/

$interseption = new Movie('Inception', '148', 'Nolan');
$barbie = new Movie('Barbie', '114', 'Gerwig');

$mirror = new Movie('Mirror', '106', 'Tarkovsky');
$shrek = new Movie('Shrek', '90', 'Adamson');
$shrek2 = new Movie('Shrek2', '100', 'Adamson');

$cine1 = new Cinema('Aurora', 'San Petersburg');
$cine2 = new Cinema('Kinomax', 'Vladivostok');

$cine1->setMovie($interseption);
$cine1->setMovie($barbie);
$cine1->setMovie($shrek);

$cine2->setMovie($mirror);
$cine2->setMovie($shrek);
$cine2->setMovie($shrek2);

$cines = Cinema::$cines;

$searchResults = [];

function findByName($name, $array)
{
    $result = null;
    foreach ($array as $object) {
        if ($object->getName() === $name) {
            $result = $object;
            break;
        }
    }
    unset($object);
    $obj = $result;
    return $obj;
}

if (!empty($_POST)) {
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    $director = $_POST['director'];
    $newmovie = new Movie($name, $duration, $director);
    $cine = findByName($_POST['cine'], $cines);
    $cine->setMovie($newmovie);
}

if (!empty($_GET)) {   
    $searchResults = Cinema::getMoviesByDirector($_GET['directorName']);
}

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <title>Sprint 1 Tema 4.</title>
    <meta charset="utf-8">
    <meta name="description" content="Sprint 1 Tema 4">
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
    <div class="main">

        <div class="section">
            <form action="index.php" method="get">
                <label for="directorName">Director Name</label>
                <input type="text" value="" name="directorName" id="directorName">
                <input type="submit" name="submit" value="Search">
            </form>
        </div>


        <?php if(!empty($searchResults)) : ?>
            <div class="section">
                <h4>
                   Search Results
                </h4>
                <ul>
                    <?php                   
                    foreach ($searchResults as $key => $movie) {                                                                
                        echo '<li>' . $movie->getname() . ' ' .  $movie->getDirector() . ' ' .  $movie->getDuration() . '</li>';
                    }
                    ?>
                </ul>

            </div>

        <?php endif; ?>

        <h3>
            Cines
        </h3>

        <?php foreach ($cines as $cine) : ?>
            <div class="section">
                <h4>
                    <?= $cine->getName() ?>
                </h4>
                <ul>
                    <?php
                    $movies = $cine->getmovies();
                    foreach ($movies as $key => $movie) {
                        echo '<li>' . $movie->getName() . ' ' .  $movie->getDirector() . ' ' .  $movie->getDuration() . '</li>';
                    }
                    ?>
                </ul>
                <div>
                <?php
                    $movieLargest = $cine->getMaxDurationMovie();                    
                    ?>
                    La pelicula mas larga es <?= $movieLargest->getName(); ?> y dura  <?= $movieLargest->getDuration(); ?> minutos
                </div>
            </div>

        <?php endforeach; ?>

        <div class='section'>
            <h5>
                Add movie
            </h5>
            <form action="index.php" method="post">
                <label for="name">Movie Title</label>
                <input type="text" value="" name="name" id="name">
                <br>
                <label for="director">Director</label>
                <input type="text" value="" name="director" id="director">
                <br>
                <label for="duration">Duration</label>
                <input type="number" value="" name="duration" id="duration" min="10">
                <br>

                <label for="cine">Cine</label>
                <select name="cine" id="cine">
                    <?php foreach ($cines as $cine) : ?>
                        <option value="<?= $cine->getName() ?>"><?= $cine->getName() ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <input type="submit" name="submit" value="Save">
            </form>
        </div>
    </div>

</body>

</html>