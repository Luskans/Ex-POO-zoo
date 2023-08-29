<?php

class Eagle extends Animal {

    public function __construct(string $name) {
        parent::__construct($name, 40, 10, 200, 100, "./utilities/images/animals/goose.gif");
    }

}