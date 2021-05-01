<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

*/
echo "TEST FOR PARKBRAKE SYSTEM";

$ford = new Car('green', 4, 'fuel');
var_dump($ford);

try {
    $ford->start();
}
catch (Exception $e){
    echo "Exception received  : ". $e->getMessage() . "<br>";
    $ford->setParkBrake();
}
finally{
    echo "Je roule commme un bour1";
}
var_dump($ford);

