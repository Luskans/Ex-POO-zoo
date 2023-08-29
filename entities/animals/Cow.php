<?php

class Cow extends Animal {

    public function __construct(string $name) {
        parent::__construct($name, 120, 400, 100, 20, "./utilities/images/animals/cow.gif");
    }

}