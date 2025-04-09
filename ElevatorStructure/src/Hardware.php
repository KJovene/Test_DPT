<?php

class HardwareIn implements ElevatorHardwareInterface {
    public function goUp() {
        echo "HardwareIn: Moving up\n";
    }

    public function goDown() {
        echo "HardwareIn: Moving down\n";
    }
}