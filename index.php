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

<body class="d-flex">

    <?php include './controllers/process_main.php' ?>

    <section class="field d-flex">
        <?php $_SESSION['zoo'] === "" ? include './vues/display_intro.php' : include './vues/display_zoo.php'; ?>
        <pre>
            <?php print_r($_SESSION['zoo']); ?>
        </pre>
    </section>

    <section class="infos d-flex flex-column">
        <div class="preview">
            
        </div>
        <div class="log">
            <h2>What happen today in 
            <?php if ($_SESSION['zoo'] != ""): ?>
                <span><?= $_SESSION['zoo']->getName(); ?></span>
            <?php endif ?>
            </h2>
        </div>
    </section>

    <?php include('./vues/modals.php'); ?>
       
</body>

</html>