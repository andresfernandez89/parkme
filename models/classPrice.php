<?php

class Price {
    const HALFHOUR = 50;
    const HOUR = 100;
    const DAY = 500;
    const MONTH = 500;
    protected $SelectedTime;
    protected $time;

    public function setTimeCount($SelectedTime) {
        $this->$SelectedTime = $SelectedTime;
    }

    public function geTtimeCount() {
        return $this->SelectedTime;
    }

    public function __set($property, $value) {
        return $this -> $property = $value;
    }

    public function __get($property) {
        if ( property_exists($this, $property)) {
            return $this -> $property;
        }
    }

    public function getPrecio($time) {
        return $this->selectedTime * self::$time;
        }
    }
