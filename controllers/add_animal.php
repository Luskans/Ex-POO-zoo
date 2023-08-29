<?php

require('../utilities/config/autoload.php');

session_start();

$_SESSION['buyEnclosureError'] = "";
$_SESSION['sellEnclosureError'] = "";
$_SESSION['buyAnimalError'] = "";
$_SESSION['sellAnimalError'] = "";

if ($_POST['animal'] === 'Cow') {
    $price = 100;

} elseif ($_POST['animal'] === 'Boar') {
    $price = 150;

} elseif ($_POST['animal'] === 'Crab') {
    $price = 60;

} elseif ($_POST['animal'] === 'Eagle') {
    $price = 200;

} else {
    $price = 0;
}


if (!empty($_POST['name']) && !empty($_POST['animal']) && !empty($_POST['enclosureName'])) {

    if ($_SESSION['zoo']->getMoney() >= $price) {

        $enclosure = $_SESSION['zoo']->findEnclosure($_POST['enclosureName']);

        if ($enclosure && !$enclosure->checkName($_POST['name'])) {

            $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $price);

            if ($_POST['animal'] === 'Cow') {
                $enclosure->setAnimalsList(new Cow($_POST['name']));

            } elseif ($_POST['animal'] === 'Boar') {
                $enclosure->setAnimalsList(new Boar($_POST['name']));

            } elseif ($_POST['animal'] === 'Crab') {
                $enclosure->setAnimalsList(new Crab($_POST['name']));

            } elseif ($_POST['animal'] === 'Eagle') {
                $enclosure->setAnimalsList(new Eagle($_POST['name'])); 
            }

        } else {
            $_SESSION['buyAnimalError'] = "An animal with this name already exists or the enclosure doesn't exist.";
        }

    } else {
        $_SESSION['buyAnimalError'] = "Sorry, you don't have enough money to buy the animal.";
    }

} else {
    $_SESSION['buyAnimalError'] = "Please complete all required fields.";
}

header('Location: ../index.php');