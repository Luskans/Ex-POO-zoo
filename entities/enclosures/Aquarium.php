<?php

class Aquarium extends Enclosure {

    public function __construct(string $name, int $price) {
        parent::__construct($name, $price, "Aquarium", "./utilities/images/assets/aquarium.jpg");
    }

    //////// GETTER & SETTER ////////

    //////// METHODS ////////

}