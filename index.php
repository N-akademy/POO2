<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$truckOne = new Truck('red', 3, 'electric',60);
var_dump($truckOne);

echo $truckOne->forward();
echo '<br>';
echo $truckOne->brake();
echo '<br>';
echo $truckOne->setLoading(30);
echo '<br>';

$truckTwo = new Truck('blue', 2, 'gazoil',100);
var_dump($truckOne);

echo $truckTwo->forward();
echo '<br>';
echo $truckTwo->brake();
echo '<br>';
echo $truckTwo->setLoading(100);
echo '<br>';