<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }

    public function getInfo() {
        print("{$this->year} {$this->make} {$this->model}<br>");
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this -> doors = $doors;
    }

    public function getInfo() {
        print("{$this->year} {$this->make} {$this->model} {$this->doors}<br>");
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this -> type = $type;
    }

    public function getInfo() {
        print("{$this->year} {$this->make} {$this->model} {$this->type}<br>");
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this -> loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        print("{$this->year} {$this->make} {$this->model} {$this->loadCapacity}<br>");
    }
}

$car1 = new Car('BMW', 'MX-1983', 1983, 4);
$car1 -> getInfo();
$car2 = new Bike('Toyota', 'Sunrise', 2000, 'Motorbike');
$car2 -> getInfo();
$car3 = new Truck('MAN', 'Bobik', 2005, '1 metric ton');
$car3 -> getInfo();

/*
class X {
    public $A;
    public $B;

    public function __construct($A, $B) {
        $this -> A = $A;
        $this -> B = $B;
    }

    public function getInfo() {
        print("{$this->$A}, {$this->$B}<br>");
    }
}

class Y extends X {
    public $A;

    public function __construct($A) {
        parent::__construct($A);
        $this -> A = $A
    }

    public function getInfo() {
        print("{$this->$A}<br>");
    }
}

class Y extends X {
    public $A;

    public function __construct($A) {
        parent::__construct($A);
        $this -> A = $A
    }

    public function getInfo() {
        print("{$this->$A}<br>");
    }
}

class Y extends X {
    public $A;

    public function __construct($A) {
        parent::__construct($A);
        $this -> A = $A
    }

    public function getInfo() {
        print("{$this->$A}<br>");
    }
}
*/