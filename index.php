<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue', 1);
//echo $bike->forward();
var_dump($bike);

//   TEST FOR BIKE

echo '***THE BIKER said:    ' /*. ($bike->start())*/;
var_dump($bike->start());

echo $bike->forward();

$bike->setCurrentSpeed(9);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


//    TEST FOR A CAR 

var_dump(Car::ALLOWED_ENERGIES);

$flashMcQueen = new Car('red', 2, 'fuel'); 

var_dump($flashMcQueen);
      
var_dump($flashMcQueen->getCurrentSpeed());

echo '***FLASH Mc QUEEN said:   ';
var_dump($flashMcQueen->start()); 
echo $flashMcQueen->forward();
$flashMcQueen->setCurrentSpeed(256);
$flashMcQueen->setLevelEnergy(80);
echo '<br> Vitesse du véhicule : ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();
echo '<br> Vitesse du véhicule: ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();


var_dump($flashMcQueen);