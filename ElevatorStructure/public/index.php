<?php

require_once __DIR__ . "/../src/Elevator.php";
require_once __DIR__ . "/../src/ElevatorHardwareInterface.php";
require_once __DIR__ . "/../src/Hardware.php";

$hardware = new HardwareIn();
$elevator = new Elevator($hardware);

echo "Starting at floor : " . $elevator -> getCurrentFloor() . "\n";

$elevator -> goUp();
$elevator -> goDown();
$elevator -> goDown();
$elevator -> goUp();

echo "Final floor : " . $elevator -> getCurrentFloor() . "\n";


