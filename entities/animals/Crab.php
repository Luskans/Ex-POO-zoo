<?php

class Crab extends Animal {

    public function __construct(string $name) {
        parent::__construct($name, 0.1, 3, 60, 10, "./utilities/images/animals/crab.gif");
    }

}