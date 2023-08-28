<?php

require('./utilities/config/autoload.php');

session_start();
// session_destroy();

if (!isset($_SESSION['zoo'])) {
    $_SESSION['zoo'] = "";
}