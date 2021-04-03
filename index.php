<?php  

require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle('blue');
var_dump($bike);

// TEST moving bike

echo $bike->forward(5);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


// TEST moving car

$flashMcQueen = new Car('red', 2, true); // True for fuel, false for electric car

var_dump($flashMcQueen);

var_dump($flashMcQueen->getCurrentSpeed());
$flashMcQueen->setCurrentSpeed(256);
$flashMcQueen->setLevelEnergy(80);
var_dump($flashMcQueen->getLevelEnergy());
var_dump($flashMcQueen);

//echo $flashMcQueen->forward();
echo '<br> Vitesse du véhicule : ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();
echo '<br> Vitesse du véhicule: ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();
