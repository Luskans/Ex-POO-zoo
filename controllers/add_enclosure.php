<?php

require('../utilities/config/autoload.php');

session_start();
$_SESSION['buyEnclosureError'] = "";
$_SESSION['sellEnclosureError'] = "";
$_SESSION['buyAnimalError'] = "";
$_SESSION['sellAnimalError'] = "";

if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['type'])) {

    if ($_SESSION['zoo']->getMoney() >= $_POST['price']) {

        if (!$_SESSION['zoo']->checkName($_POST['name'])) {

            if ($_POST['type'] === "Normal") {
                $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $_POST['price']);
                $_SESSION['zoo']->setEnclosuresList(new Normal($_POST['name'], $_POST['price'], $_POST['type']));
            }
            if ($_POST['type'] === "Aviary") {
                $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $_POST['price']);
                $_SESSION['zoo']->setEnclosuresList(new Aviary($_POST['name'], $_POST['price'], $_POST['type']));
            }
            if ($_POST['type'] === "Aquarium") {
                $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $_POST['price']);
                $_SESSION['zoo']->setEnclosuresList(new Aquarium($_POST['name'], $_POST['price'], $_POST['type']));
            }

        } else {
            $_SESSION['buyEnclosureError'] = "An enclosure with this name already exist.";
        }

    } else {
        $_SESSION['buyEnclosureError'] = "Sorry you don't have enough money to buy the enclosure.";
    }

} else {
    $_SESSION['buyEnclosureError'] = "Please, complete all required fields.";
}

header('Location: ../index.php');