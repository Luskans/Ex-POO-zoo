<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./utilities/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</head>

<?php include './controllers/process_main.php' ?>

<?php
// echo '<script>';
// echo 'location.reload(true);'; // Recharge la page en ignorant le cache
// echo 'localStorage.clear();';   // Vide le localStorage
// echo '</script>';
?>

<body class="d-flex">
    <section class="field d-flex">
        <?php include './vues/main_display.php' ?>
    </section>

    <section class="infos d-flex flex-column">
        <div class="preview">
            <?php var_dump($_SESSION['zoo']); ?>
        </div>
        <div class="log">
            <h2>What happen today in 
            <?php if ($_SESSION['zoo'] != "") { ?>
                <?= $_SESSION['zoo']->getName(); ?></h2>
            <?php } ?>
        </div>
    </section>
       
</body>

</html>