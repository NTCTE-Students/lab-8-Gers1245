<?php

class Thermostat {
    private $temperature;

    public function __construct($temperature = 0) {
        $this -> temperature = $temperature;
    }

    public function setTemp($currentTemp) {
        if ($currentTemp < 100 and $currentTemp > -100) {
            $this -> temperature = $currentTemp;

            print("{$this->temperature}<br>"); //debug

        } else {
            print("На этом мои полномочия всё... (температура выше либо ниже 100 и -100 соответственно<br>");
        }
    }

    public function checkTemp() {
        print("{$this->temperature}<br>");
    }
}

$smth1 = new Thermostat();
$smth1 -> checkTemp();
$smth1 -> setTemp(32);
$smth1 -> setTemp(102);
$smth1 -> setTemp(-102);
$smth1 -> setTemp(50);