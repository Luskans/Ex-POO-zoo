<?php

class Boar extends Animal {

    public function __construct(string $name) {
        parent::__construct($name, 0.8, 100, 150, 40, "./utilities/images/animals/boar.gif");
    }

}