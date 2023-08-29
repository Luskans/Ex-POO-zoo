<?php

require('./utilities/config/autoload.php');

session_start();
// session_destroy();

if (!isset($_SESSION['zoo'])) {
    $_SESSION['zoo'] = "";
}
if (!isset($_SESSION['buyEnclosureError'])) {
    $_SESSION['buyEnclosureError'] = "";
}
if (!isset($_SESSION['buyAnimalError'])) {
    $_SESSION['buyAnimalError'] = "";
}
