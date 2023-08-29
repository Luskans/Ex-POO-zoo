<!--------------- EMPLOYEES SECTION ----------------->
<div class="aside d-flex flex-column">
    <div class="aside__time d-flex flex-column align-items-center justify-content-around">
        <button class="btn btn-warning">Next day</button>
        <?php if ($_SESSION['zoo'] != "") { ?>
            <div class="d-flex justify-content-center">
                <p> <?= $_SESSION['zoo']->getMoney(); ?> $</p>
            </div>
        <?php } ?>
    </div>
    <div class="aside__employees d-flex flex-column align-items-center justify-content-around">
        <div class="aside__employee">
            <button>hire employee</button>
        </div>
    </div>
</div>


<!--------------- PARK SECTION ----------------->
<div class="main">
    <?php foreach ($_SESSION['zoo']->getEnclosuresList() as $enclosure) { ?>
    <!--------------- PARK ----------------->
    <button class="enclosure" data-bs-toggle="modal" data-bs-target="#enclosureModal-<?= str_replace(' ', '', $enclosure->getName()) ?>">
        <div class="enclosure__name">
            <?= $enclosure->getName(); ?>
        </div>
        <?php foreach ($enclosure as $animal) { ?>
        <!--------------- ANIMALS SECTION ----------------->
        <div class="enclosure__animal">
            <?= $animal->getImage(); ?>
        </div>
        <?php } ?>

        <!--------------- NEW ANIMAL SECTION ----------------->
    </button>
    <?php } ?>

<!--------------- NEW ENCLOSURE SECTION ----------------->
    <div class="enclosure enclosure--new d-flex align-items-center justify-content-center">
    <?php if (count($_SESSION['zoo']->getEnclosuresList()) <= 9) { ?>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#newEnclosureModal">
            Buy enclosure
        </button>
        <p><?= (count($_SESSION['zoo']->getEnclosuresList()) + 1) * 100 ?> $</p>
        <?php if ($_SESSION['buyEnclosureError'] != "") { ?>
            <?= $_SESSION['buyEnclosureError'] ?>
        <?php } ?>

        
    <?php } ?>
    </div>
</div>

<?php include('./vues/modals.php'); ?>