<?php
class Car {
    var $maker = null;
    var $price = 0;
    var $capacity = 0;
    var $speed = 0;


    public function accele() {
        print('加速します');
    }

    public function brake() {
        print('ストップします');
    }

    public function increasePassenger($capacity) {
        if($capacity <= $this->capacity) {
            for($i=1; $i<=$capacity; $i++) {
                $this->speed *= 0.95;
                $this->speed = floor($this->speed);
            }
        } else {
            return 'キャパオーバー';
        }

        return $this->speed . 'km/h';
    }
}
?>