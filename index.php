<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', 1);
$bike->setNbWheels(2);
var_dump($bike);

//   TEST FOR BIKE

echo '**********************THE BIKER said:    ' /*. ($bike->start())*/;
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

echo '******************FLASH Mc QUEEN said:   ';
var_dump($flashMcQueen->start()); 
echo $flashMcQueen->forward();
$flashMcQueen->setCurrentSpeed(256);
$flashMcQueen->setLevelEnergy(80);
echo '<br> Vitesse du véhicule : ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();
echo '<br> Vitesse du véhicule: ' . $flashMcQueen->getCurrentSpeed() . ' km/h' . '<br>';
echo $flashMcQueen->brake();


var_dump($flashMcQueen);


var_dump(Truck::ALLOWED_LOADINGSTATE);

$meatTruck = new Truck('green', 3, 'electric', 20);
var_dump($meatTruck);

var_dump($meatTruck->getCurrentSpeed());
$meatTruck->setLoadingState('full');      //Truck loading

echo '********************************The TRUCKER said:   ';
var_dump($meatTruck->start()); 
echo $meatTruck->forward();
$meatTruck->setCurrentSpeed(110);   // Km/h
$meatTruck->setLevelEnergy(30);      // Percent
echo '<br> Vitesse du camion : ' . $meatTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $meatTruck->brake();
echo '<br> Vitesse du camion: ' . $meatTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $meatTruck->brake();


var_dump($meatTruck);