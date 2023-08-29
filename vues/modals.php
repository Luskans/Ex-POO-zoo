<!--------------- MODAL NEW ENCLOSURE ----------------->
<div class="modal fade" id="newEnclosureModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newEnclosureLabel">Create you new enclosure !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newEnclosure" class="d-flex flex-column align-items-center gap-2" action="./controllers/add_enclosure.php" method="post">
                    <input type="text" name="name" placeholder="Name of your enclosure..." required>
                    <div>
                        <label for="normal"><img src="./utilities/images/assets/normal.jpg" required></label>
                        <input type="radio" name="type" value="Normal">
                    </div>
                    <div>
                        <label for="aviary"><img src="./utilities/images/assets/aviary.jpg"></label>
                        <input type="radio" name="type" value="Aviary">
                    </div>
                    <div>
                        <label for="aquarium"><img src="./utilities/images/assets/aquarium.jpg"></label>
                        <input type="radio" name="type" value="Aquarium">
                    </div>
                    <input type="hidden" name="price" value="<?= (count($_SESSION['zoo']->getEnclosuresList()) + 1) * 100 ?>">
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-outline-warning" type="submit" form="newEnclosure">Buy</button>
            </div>
           
            
        </div>
    </div>
</div>


<!--------------- MODAL DETAILS ENCLOSURE ----------------->
<?php foreach ($_SESSION['zoo']->getEnclosuresList() as $enclosure): ?>
    <?php $modalId = str_replace(' ', '', $enclosure->getName()); ?>
    <div class="modal fade text-dark" id="enclosureModal-<?= $modalId ?>" tabindex="-1" aria-labelledby="enclosureModalLabel-<?= $enclosure->getName(); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enclosureModalLabel-<?= $enclosure->getName(); ?>">Enclosure: <?= $enclosure->getName(); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cleanliness: <?= $enclosure->getCleanliness(); ?> / 10</p>
                    <p>Number of animals: <?= count($enclosure->getAnimalsList()); ?> / 6</p>                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#newAnimalModal">Buy test</button>
                    <button type="button" class="btn btn-outline-warning">Sell animal</button>
                    <button type="button" class="btn btn-outline-warning">Move animal</button>
                    <button type="button" class="btn btn-outline-warning">Clean enclosure</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!--------------- MODAL NEW ANIMAL ----------------->
<div class="modal fade" id="newAnimalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newAnimalModalLabel">Buy a new animal !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newAnimalForm" action="./controllers/add_animal.php" method="post">
                    <input type="text" name="name" placeholder="Enter a name for your animal..." required>
                    <div>
                        <label for="cow"><img src="./utilities/images/animals/cow.gif" required></label>
                        <input type="radio" name="animal" value="Cow">
                    </div>
                    <div>
                        <label for="boar"><img src="./utilities/images/animals/boar.gif"></label>
                        <input type="radio" name="animal" value="Boar">
                    </div>
                    <div>
                        <label for="crab"><img src="./utilities/images/animals/crab.gif"></label>
                        <input type="radio" name="animal" value="Crab">
                    </div>
                    <div>
                        <label for="eagle"><img src="./utilities/images/animals/eagle.gif"></label>
                        <input type="radio" name="animal" value="Eagle">
                    </div>
                    <input type="hidden" name="enclosureName" value="<?= $enclosure->getName(); ?>">
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-outline-warning" type="submit" form="newAnimalForm">Buy</button>
            </div>
        </div>
    </div>
</div>


<!--------------- MODAL DETAILS ANIMAL ----------------->
<?php foreach ($_SESSION['zoo']->getEnclosuresList() as $enclosure): ?>
    <?php $modalId = str_replace(' ', '', $enclosure->getName()); ?>
    <div class="modal fade text-dark" id="enclosureModal-<?= $modalId ?>" tabindex="-1" aria-labelledby="enclosureModalLabel-<?= $enclosure->getName(); ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enclosureModalLabel-<?= $enclosure->getName(); ?>"><?= $enclosure->getName(); ?> enclosure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cleanliness: <?= $enclosure->getCleanliness(); ?> / 10</p>
                    <p>Number of animals: <?= count($enclosure->getAnimalsList()); ?> / 6</p>                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning">Buy animal</button>
                    <button type="button" class="btn btn-outline-warning">Move animal</button>
                    <button type="button" class="btn btn-outline-warning">Clean enclosure</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>