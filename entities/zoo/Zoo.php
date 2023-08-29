<?php

class Zoo {
    private string $name;
    private array $employeesList = [];
    private array $enclosuresList = [];
    private int $income = 0;
    private int $fees = 0;
    private int $money;

    public function __construct(string $name, int $money) {
        $this->setName($name);
        $this->setMoney($money);
    }

    //////// GETTER & SETTER ////////

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getEmployeesList() {
        return $this->employeesList;
    }

    public function setEmployeesList($employeesList) {
        $this->employeesList[] = $employeesList;
        return $this;
    }

    public function getEnclosuresList() {
        return $this->enclosuresList;
    }

    public function setEnclosuresList($enclosuresList) {
        $this->enclosuresList[] = $enclosuresList;
        return $this;
    }

    public function getIncome() {
        return $this->income;
    }

    public function setIncome($income) {
        $this->income = $income;
        return $this;
    }

    public function getFees() {
        return $this->fees;
    }

    public function setFees($fees) {
        $this->fees = $fees;
        return $this;
    }

    public function getMoney() {
        return $this->money;
    }

    public function setMoney($money) {
        $this->money = $money;
        return $this;
    }

    //////// METHODS ////////

    public function showStats() {

    }

    public function main() {

    }

    public function dayIncome() {

    }

    public function hireEmployee(object $employee) {
        $this->getEmployeesList()[] = $employee;
    }

    public function fireEmployee(object $employee) {
        $objectArray = $this->getEmployeesList(); 
        foreach ($objectArray as $key => $obj) {
            if ($obj->getName() === $employee->getName()) {
                unset($objectArray[$key]);
                break;
            }
        }
    }

    public function buyEnclosure(object $enclosure) {
        if ($enclosure->get)
        $this->getEnclosuresList()[] = $enclosure;
    }

    public function sellEnclosure(object $enclosure) {
        $objectArray = $this->getEnclosuresList(); 
        foreach ($objectArray as $key => $obj) {
            if ($obj->getName() === $enclosure->getName()) {
                unset($objectArray[$key]);
                break;
            }
        }
    }

    public function checkName(string $name) {
        $existingName = false;
        $objectArray = $this->getEnclosuresList(); 
        foreach ($objectArray as $object) {
            if ($object->getName() === $name) {
                $existingName = true;
            }
        }
        return $existingName;
    }

    public function findEnclosure(string $name):object {
        $objectArray = $this->getEnclosuresList(); 
        foreach ($objectArray as $object) {
            if ($object->getName() === $name) {
                return ($object);
            }
        }
    }

}