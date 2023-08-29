<?php

require('../utilities/config/autoload.php');

session_start();
$_SESSION['buyEnclosureError'] = "";
$_SESSION['sellEnclosureError'] = "";
$_SESSION['buyAnimalError'] = "";
$_SESSION['sellAnimalError'] = "";

var_dump($_POST['animalName']);
var_dump($_POST['enclosureName']);
// if (!empty($_POST['animalName']) && !empty($_POST['enclosureName'])) {
//     foreach ($_SESSION['zoo']->getEnclosuresList() as $enclosure) {
//         if ($enclosure->checkName($_POST['animalName'])) {
//             $animalToSell = $enclosure->findAnimal($_POST['animalName']);
//             $enclosure->sellAnimal($animalToSell);
//         }
//     }

// } else {
//     $_SESSION['sellAnimalError'] = "Please, select an animal to sell.";
// }

// if (!empty($_POST['animal']) && !empty($_POST['enclosure'])) {
//     $_POST['enclosure']->sellAnimal($_POST['animal']);

// } else {
//     $_SESSION['sellAnimalError'] = "Please, select an animal to sell.";
// }

if (!empty($_POST['animalName']) && !empty($_POST['enclosureName'])) {
    $enclosure = $_SESSION['zoo']->findEnclosure($_POST['enclosureName']);
    $animal = $enclosure->findAnimal($_POST['animalName']);
    $enclosure->sellAnimal($animal);

} else {
    $_SESSION['sellAnimalError'] = "Please, select an animal to sell.";
}



header('Location: ../index.php');

