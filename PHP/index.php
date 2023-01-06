<?php

require_once('car.php');
require_once('UberX.php');
require_once('account.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456", "Chevrolet", "Spark"))
$uberX->PrintDataCar();
$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->PrintDataCar();