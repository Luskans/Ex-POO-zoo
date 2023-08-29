<?php

require('../utilities/config/autoload.php');
session_start();

if ($_POST['name'] != "" && $_POST['difficulty'] != "") {
    $money;

    if ($_POST['difficulty'] === 'easy') {
        $money = 3000;
    }

    if ($_POST['difficulty'] === 'medium') {
        $money = 1000;
    }

    if ($_POST['difficulty'] === 'hard') {
        $money = 400;
    }

    $_SESSION['zoo'] = new Zoo($_POST['name'], $money);
}

header('Location: ../index.php');