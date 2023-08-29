<?php

abstract class Enclosure {
    protected string $name;
    protected int $cleanliness = 10;
    protected array $animalsList = [];
    protected int $price;
    protected string $type;
    protected string $image;

    public function __construct(string $name, int $price, string $type, string $image) {
        $this->setName($name);
        $this->setPrice($price);
        $this->setType($type);
        $this->setImage($image);
    }

    //////// GETTER & SETTER ////////

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getCleanliness() {
        return $this->cleanliness;
    }

    public function setCleanliness($cleanliness) {
        $this->cleanliness = $cleanliness;
        return $this;
    }

    public function getAnimalsList() {
        return $this->animalsList;
    }

    public function setAnimalsList($animalsList) {
        $this->animalsList[] = $animalsList;
        return $this;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
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

    public function showStats() {

    }

    public function buyAnimal(object $animal) {
        $this->getAnimalsList()[] = $animal;
    }

    public function sellAnimal(object $animal) {
        $objectArray = $this->getAnimalsList(); 
        foreach ($objectArray as $key => $obj) {
            if ($obj->getName() === $animal->getName()) {
                unset($objectArray[$key]);
                break;
            }
        }
    }

    public function moveAnimal(object $animal, object $enclosure) {
        $sourceArray = $this->getAnimalsList();
        $targetArray = $enclosure->getAnimalsList();
        foreach ($sourceArray as $key => $object) {
            if ($object->getName() === $animal->getName()) {
                unset($sourceArray[$key]);
                $targetArray[] = $object;
                break;
            }
        }
    }
    
    public function showAnimals() {

    }

    public function checkName(string $name) {
        $existingName = false;
        $objectArray = $this->getAnimalsList(); 
        foreach ($objectArray as $object) {
            if ($object->getName() === $name) {
                $existingName = true;
            }
        }
        return $existingName;
    }

}