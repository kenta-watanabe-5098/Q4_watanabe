<?php

class Nissan extends Car {
    public function __construct() {
        $this->maker = "Nissan";
        $this->price = 1500000;
        $this->capacity = 5;
        $this->speed = 160;
    }

    public function defect() {
        $this->maker = "Nissan";
        $this->price = 1500000;
        $this->capacity = 5;
        $this->speed = 160;
        $this->speed *= 0.6;
    }

}

?>