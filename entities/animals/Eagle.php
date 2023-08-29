<?php

class Eagle extends Animal {

    public function __construct(string $name) {
        parent::__construct($name, 0.4, 10, 200, 100, "./utilities/images/animals/eagle.gif");
    }

}