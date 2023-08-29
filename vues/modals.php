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
                        <label for="normal"><img src="./utilities/images/assets/normal.jpg"></label>
                        <input type="radio" name="type" value="Normal" required>
                    </div>
                    <div>
                        <label for="aviary"><img src="./utilities/images/assets/aviary.jpg"></label>
                        <input type="radio" name="type" value="Aviary">
                    </div>
                    <div>
                        <label for="aquarium"><img src="./utilities/images/assets/aquarium.jpg"></label>
                        <input type="radio" name="type" value="Aquarium">
                    </div>
                    <input type="hidden" name="price" value="<?= (count($_SESSION['zoo']->getEnclosuresList()) + 1) * 100; ?>">
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
    <div class="modal fade text-dark" id="enclosureModal-<?= $modalId; ?>" tabindex="-1" aria-labelledby="enclosureModalLabel-<?= $modalId; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enclosureModalLabel-<?= $modalId; ?>">Enclosure: <?= $enclosure->getName(); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cleanliness: <?= $enclosure->getCleanliness(); ?> / 10</p>
                    <p>Number of animals: <?= count($enclosure->getAnimalsList()); ?> / 6</p>                       
                </div>
                <div class="modal-footer">
                    <?php if (count($enclosure->getAnimalsList()) < 6) { ?>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#newAnimalModal-<?= $modalId; ?>">Buy animal</button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-outline-danger"><span>Buy</span></button>
                    <?php } ?>

                    <?php if (count($enclosure->getAnimalsList()) > 0) { ?>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#sellAnimalModal-<?= $modalId; ?>">Sell animal</button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-outline-danger"><span>Sell</span></button>
                    <?php } ?>

                    <button type="button" class="btn btn-outline-warning">Move animal</button>
                    
                    <?php if ($enclosure->getCleanliness() < 10) { ?>
                    <button type="button" class="btn btn-outline-warning">Clean enclosure</button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-outline-danger"><span>Clean</span></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!--------------- MODAL BUY ANIMAL ----------------->
    <div class="modal fade" id="newAnimalModal-<?= $modalId; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newAnimalModalLabel-<?= $modalId; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newAnimalModalLabel-<?= $modalId; ?>">Buy a new animal !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newAnimalForm-<?= $modalId; ?>" action="./controllers/add_animal.php" method="post">
                        <input type="text" name="name" placeholder="Enter a name for your animal..." required>
                        <div>
                            <label><img src="./utilities/images/animals/cow.gif"></label>
                            <input type="radio" name="animal" value="Cow" required>
                        </div>
                        <div>
                            <label><img src="./utilities/images/animals/boar.gif"></label>
                            <input type="radio" name="animal" value="Boar">
                        </div>
                        <div>
                            <label><img src="./utilities/images/animals/crab.gif"></label>
                            <input type="radio" name="animal" value="Crab">
                        </div>
                        <div>
                            <label><img src="./utilities/images/animals/goose.gif"></label>
                            <input type="radio" name="animal" value="Eagle">
                        </div>
                        <input type="hidden" name="enclosureName" value="<?= $enclosure->getName(); ?>">
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-outline-warning" type="submit" form="newAnimalForm-<?= $modalId; ?>">Buy</button>
                </div>
            </div>
        </div>
    </div>

    <!--------------- MODAL SELL ANIMAL ----------------->
    <div class="modal fade" id="sellAnimalModal-<?= $modalId; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sellAnimalModalLabel-<?= $modalId; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sellAnimalModalLabel-<?= $modalId; ?>">Choose an animal to sell</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex justify-content-center flex-wrap gap-5" id="sellAnimalForm-<?= $modalId; ?>" action="./controllers/sell_animal.php" method="post">
                    <?php foreach ($enclosure->getAnimalsList() as $animal): ?>
                        <div>
                            <p><?= $animal->getName(); ?></p>
                            <img src="<?= $animal->getImage(); ?>">
                            <p>Height: <?= $animal->getHeight(); ?>cm</p>
                            <p>Weight: <?= $animal->getWeight(); ?>kg</p>
                            <p>Value: <?= $animal->getPrice(); ?>$</p>
                            <p>Income: <?= $animal->getIncome(); ?>$</p>
                            <p>Hungry: <?= ($animal->getIsHungry()) ? "Yes" : "No"; ?></p>
                            <p>Sleeping: <?= ($animal->getIsSleeping()) ? "Yes" : "No"; ?></p>
                            <p>Sick: <?= ($animal->getIsSick()) ? "Yes" : "No"; ?></p>
                            <input type="radio" name="animalName" value="<?= $animal->getName(); ?>" required>
                            <input type="hidden" name="enclosureName" value="<?= $modalId; ?>">
                        </div>
                    <?php endforeach ?>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-outline-warning" type="submit" form="sellAnimalForm-<?= $modalId; ?>">Sell</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>