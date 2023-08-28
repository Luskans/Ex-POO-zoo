<?php

class Buffalo extends Animal {
    protected string $name;
    protected int $height;
    protected int $weight;
    protected bool $isHungry;
    protected bool $isSleeping;
    protected bool $isSick;
    protected bool $isDangereous;
    protected int $cost;
    protected int $income;
    protected string $image;
    protected int $dying;

    //////// GETTER & SETTER ////////

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function getIsHungry() {
        return $this->isHungry;
    }

    public function setIsHungry($isHungry) {
        $this->isHungry = $isHungry;
        return $this;
    }

    public function getIsSleeping() {
        return $this->isSleeping;
    }

    public function setIsSleeping($isSleeping) {
        $this->isSleeping = $isSleeping;
        return $this;
    }

    public function getIsSick() {
        return $this->isSick;
    }

    public function setIsSick($isSick) {
        $this->isSick = $isSick;
        return $this;
    }

    public function getIsDangereous() {
        return $this->isDangereous;
    }

    public function setIsDangereous($isDangereous) {
        $this->isDangereous = $isDangereous;
        return $this;
    }

    public function Cost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
        return $this;
    }

    public function getIncome() {
        return $this->income;
    }

    public function setRent($income) {
        $this->income = $income;
        return $this;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    //////// METHODS ////////

    public function eat() {

    }

    public function sound() {
        
    }

    public function sleep() {
        
    }

    public function wakeUp() {
        
    }

    public function showStats() {

    }
  
}