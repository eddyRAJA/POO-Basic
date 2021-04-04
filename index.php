<?php
require_once 'Bicycle.php';

$bike = new Bicycle('blue', 1);
echo $bike->forward();
var_dump($bike);

//TEST FOR BIKE

echo $bike->forward();
$bike->setCurrentSpeed(13);
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();