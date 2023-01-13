<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct(($license, $driver, $brand, $model){
        parent:: __construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model
    }

    public function printDataCar() {
        echo
        "
        License: $this->license
        Name: {$this->driver->name}
        Document: $this->brand
        Model: $this->model
        ";
    }
}
?>