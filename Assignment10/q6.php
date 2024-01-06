<?php

class Car {
   
    public $brand;
    public $model;
    public $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function displayInfo() {
        echo "Car Information:\n";
        echo "Brand: " . $this->brand . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Color: " . $this->color . "\n";
    }
}

$car1 = new Car("Toyota", "Camry", "Blue");
$car2 = new Car("Honda", "Accord", "Red");

$car1->displayInfo();
echo "\n";
$car2->displayInfo();

?>
