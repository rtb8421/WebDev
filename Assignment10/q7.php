<?php

class Vehicle {
  
    public $brand;
    public $color;

  
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

 
    public function displayInfo() {
        echo "Vehicle Information:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Color: " . $this->color . "\n";
    }
}


class Car extends Vehicle {
    
    public $model;


    public function __construct($brand, $model, $color) {
            parent::__construct($brand, $color);
        $this->model = $model;
    }

    
    public function displayInfo() {
        echo "Car Information:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Color: " . $this->color . "\n";
    }
}

$vehicle = new Vehicle("Generic", "Silver");
$car = new Car("Toyota", "Camry", "Blue");

$vehicle->displayInfo();
echo "\n";
$car->displayInfo();

?>
