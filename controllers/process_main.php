<?php

require('./utilities/config/autoload.php');

session_start();
// $_SESSION['zoo']->setMoney(9000);
// echo '<script>';
// echo 'location.reload(true);'; // Recharge la page en ignorant le cache
// echo 'localStorage.clear();';   // Vide le localStorage
// echo '</script>';
// session_destroy();

if (!isset($_SESSION['zoo'])) {
    $_SESSION['zoo'] = "";
}
if (!isset($_SESSION['buyEnclosureError'])) {
    $_SESSION['buyEnclosureError'] = "";
}
if (!isset($_SESSION['sellEnclosureError'])) {
    $_SESSION['sellEnclosureError'] = "";
}
if (!isset($_SESSION['buyAnimalError'])) {
    $_SESSION['buyAnimalError'] = "";
}
if (!isset($_SESSION['sellAnimalError'])) {
    $_SESSION['sellAnimalError'] = "";
}

?>
