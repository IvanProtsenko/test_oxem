<?php

require_once '../vendor/autoload.php';

$farm = new App\Farm();
$farm->spawnAnimals();
$farm->peekProduction();