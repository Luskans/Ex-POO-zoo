<?php

if ($_SESSION['zoo'] === "") {
    include './vues/display_intro.php';
} else {
    include './vues/display_zoo.php';
}
