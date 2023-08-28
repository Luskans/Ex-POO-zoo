<?php

class Enclosure {
    protected string $name;
    protected int $maxCapacity;
    protected int $cleanliness;
    protected int $numberAnimals;
    protected string $climat;
    protected int $cost;
    protected int $costExtend;

    //////// GETTER & SETTER ////////

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getMaxCapacity() {
        return $this->maxCapacity;
    }

    public function setMaxCapacity($maxCapacity) {
        $this->maxCapacity = $maxCapacity;
        return $this;
    }

    public function getCleanliness() {
        return $this->cleanliness;
    }

    public function setCleanlines($cleanlines) {
        $this->cleanliness = $cleanlines;
        return $this;
    }

    public function getNumberAnimals() {
        return $this->numberAnimals;
    }

    public function setNumberAnimals($numberAnimals) {
        $this->numberAnimals = $numberAnimals;
        return $this;
    }

    public function getClimat() {
        return $this->climat;
    }

    public function setClimat($climat) {
        $this->climat = $climat;
        return $this;
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    public function getCostExtend() {
        return $this->costExtend;
    }

    public function setCostExtend($costExtend) {
        $this->costExtend = $costExtend;
        return $this;
    }


    //////// METHODS ////////

    public function showStats() {

    }

    public function build() {

    }

    public function destroy() {

    }

    public function extend() {

    }

}