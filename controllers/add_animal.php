<?php

require('../utilities/config/autoload.php');

session_start();
$_SESSION['buyAnimalError'] = "";

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

    if ($_SESSION['zoo']->getMoney() >= $_POST['price']) {

        foreach ($_SESSION['zoo']->getEnclosuresList() as $enclosure) {

            foreach ($enclosure->getAnimalsList() as $animal) {

                if (!$animal->checkName()) {

                    if ($_POST['animal'] === "Boar") {
                        $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $price);
                        $_SESSION['zoo']->findEnclosure($_POST['enclosureName'])->setAnimalsList(new Boar($_POST['name']));
                    }
                    if ($_POST['type'] === "Cow") {
                        $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $price);
                        $_SESSION['zoo']->findEnclosure($_POST['enclosureName'])->setAnimalsList(new Cow($_POST['name']));
                    }
                    if ($_POST['type'] === "Crab") {
                        $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $price);
                        $_SESSION['zoo']->findEnclosure($_POST['enclosureName'])->setAnimalsList(new Crab($_POST['name']));
                    }
                    if ($_POST['type'] === "Eagle") {
                        $_SESSION['zoo']->setMoney($_SESSION['zoo']->getMoney() - $price);
                        $_SESSION['zoo']->findEnclosure($_POST['enclosureName'])->setAnimalsList(new Eagle($_POST['name']));
                    }

                } else {
                    $_SESSION['buyAnimalError'] = "An animal with this name already exist.";
                }
            }
        }
        
    } else {
        $_SESSION['buyAnimalError'] = "Sorry you don't have enough money to buy the animal.";
    }

} else {
    $_SESSION['buyAnimalError'] = "Please, complete all required fields.";
}

header('Location: ../index.php');