<?php

namespace solutions;

class Vehicle
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function displayInfo()
    {
        echo "Brand: {$this->brand}, Model: {$this->model} <br />";
    }
}

class Car extends Vehicle
{
    public $numDoors;

    public function __construct($brand, $model, $numDoors)
    {
        parent::__construct($brand, $model);
        $this->numDoors = $numDoors;
    }

    public function displayCarInfo()
    {
        $this->displayInfo(); // Calling the displayInfo method from the parent class
        echo "Number of Doors: {$this->numDoors} <br />";
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Camry", 4);

// Accessing and displaying information
$myCar->displayCarInfo();

?>
