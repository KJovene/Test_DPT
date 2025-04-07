<?php

require_once __DIR__ . "/../src/Elevator.php";

$elevator = new Elevator();

echo "Starting at floor : " . $elevator -> getCurrentFloor() . "\n";

$elevator -> goUp();
$elevator -> goDown();
$elevator -> goDown();
$elevator -> goUp();

echo "Final floor : " . $elevator -> getCurrentFloor() . "\n";


