<?php

use App\Factory\VehiculeFactory;

require('../vendor/autoload.php');

$factory = new VehiculeFactory(8, "gazole");
$truck = $factory->getTruck();

$vehicule = $factory->getVehicule(30, 10.5);