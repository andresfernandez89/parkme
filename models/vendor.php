<?php

require_once('User.php');

class Vendor extends User {
    protected $comision;
    protected $parkingName;

    public function __set($property, $value) {
        return $this -> $property = $value;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this -> $property;
        }
    }
}