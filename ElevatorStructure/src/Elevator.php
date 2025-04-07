<?php

class Elevator {

  private int $currentFloor;

  public function __construct (int $initialFloor = 0) {
    $this -> currentFloor = $initialFloor;
  }

  public function goUp() {
    $this -> currentFloor++;
    echo "Going up to floor {$this -> currentFloor} \n";
  }

  public function goDown() {
    if ($this -> currentFloor > 0) {
      $this -> currentFloor--;
      echo "Going down to floor {$this -> currentFloor} \n";
    } else {
      echo "Already at the ground floor \n";
    }
  }

  public function getCurrentFloor() {
    return $this -> currentFloor;
  }
}

