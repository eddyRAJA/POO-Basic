<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'SkateBoard.php';


echo "TEST FOR BIKE";

$eBike = new Bicycle('blue', 1, true);
$mBike = new Bicycle('blue', 1, false);

var_dump($eBike);
var_dump($eBike->switchOn());
var_dump($eBike->switchOff());

var_dump($mBike);
var_dump($mBike->switchOn());
var_dump($mBike->switchOff());



echo "TEST FOR CAR";

$flashMcQueen = new Car('red', 2, 'fuel'); 

var_dump($flashMcQueen);
var_dump($flashMcQueen->switchOn());
var_dump($flashMcQueen->switchOff());

echo " NO TEST FOR SKATEbOARD";

$mySkate = new SkateBoard('orange', 0);
var_dump($mySkate);