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
        <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="aside__employee">
        </div>
        <?php } ?>
    </div>
</div>
<div class="main">
    <?php for ($i = 0; $i < 9; $i++) { ?>
    <div class="enclosure">
        <div class="enclosure__name">
        </div>
        <?php for ($j = 0; $j < 6; $j++) { ?>
        <div class="enclosure__animal">
        </div>
        <?php } ?>
    </div>
    <?php } ?>   
</div>