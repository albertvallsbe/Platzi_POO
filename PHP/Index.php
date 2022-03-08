<?php

require_once('Car.php');
require_once('Account.php');
require_once('uberX.php');
require_once('uberVan.php');

$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->setPassenger(4);
$car->PrintDataCar();
echo "<br>";


$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->PrintDataCar();
echo "<br>";


$uberVan = new UberVan("CVB123", new Account("Andrea Herrera", "AND498"), "Dodge", "Attitude");
$uberVan->setPassenger(6);
$uberVan->PrintDataCar();

?>