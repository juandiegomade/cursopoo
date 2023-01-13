<?php

require_once('account.php');
class Car {
    public $id;
    public $license;
    public $driver;
    protected $passengers;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver
    }

    public function PrintDataCar(){
        echo "license: $this->license, driver: {$this->driver->name}, Numero de pasajeros: $this->passengers";

    }

    public function getPassenger(){
        return $this->passengers;
    }

    public function setPassenger($passengers) {
        if ($passengers == 4) {
            $this->passengers = $passengers;
        }
        else {
            echo "Necesitas asignar 4 pasajeros";
        }
    }

}