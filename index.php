<?php
// index.php

require_once 'Bicycle.php';
require_once 'Cars.php';

$bike = new Bicycle('red');
$bike->setColor('blue');
$bike->setCurrentSpeed(40);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';
echo '<br>';

$cars = new Cars('black', '2','100');
$cars->setCurrentSpeed(150);

// Moving Cars
echo $cars->start();
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br>';
echo '<br>';
