<?php

abstract class Employee {
    protected string $name;
    protected int $age;
    protected string $sexe;
    protected int $cost = 200;
    protected int $salary;
    protected string $temper = "Fénéant";
    protected string $image;
    protected int $energy = 10;
    protected int $maxEnergy;

    //////// GETTER & SETTER ////////

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
        return $this;
    }

    public function getTemper() {
        return $this->temper;
    }

    public function setTemper($temper) {
        $this->temper = $temper;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function setEnergy($energy) {
        $this->energy = $energy;
        return $this;
    }

    public function getMaxEnergy() {
        return $this->maxEnergy;
    }

    public function setMaxEnergy($maxEnergy) {
        $this->maxEnergy = $maxEnergy;
        return $this;
    }

    //////// METHODS ////////

    public function showStats() {

    }

    public function hired() {

    }

    public function fired() {

    }
 
}