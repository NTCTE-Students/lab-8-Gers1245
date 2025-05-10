<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getEmployeeInfo() {
        print("Employee name: {$this->name}, Salary: {$this->salary}<br>");
    }
}

class Manager extends Employee {
    public $M_age;

    public function __construct($name, $salary, $M_age) {
        parent::__construct($name, $salary);
        $this -> M_age = $M_age;
    }

    public function getEmployeeInfo() {
        print("Employee name: {$this->name}, Salary: {$this->salary} rubles, his age: {$this->M_age}<br>");
    }

    public function manageTeam() {
        print("{$this->name} is rage-quitting but continues his work with people<br>");
    }
}

class Developer extends Employee {
    public $Dev_age;

    public function __construct($name, $salary, $Dev_age) {
        parent::__construct($name, $salary);
        $this -> Dev_age = $Dev_age;
    }

    public function getEmployeeInfo() {
        print("Employee name: {$this->name}, Salary: {$this->salary} rubles, his age: {$this->Dev_age}<br>");
    }

    public function writeCode() {
        print("{$this->name} is writing some code and complaining about his salary<br>");
    }
}

class Designer extends Employee {
    public $D_age;

    public function __construct($name, $salary, $D_age) {
        parent::__construct($name, $salary);
        $this -> D_age = $D_age;
    }

    public function getEmployeeInfo() {
        print("Employee name: {$this->name}, Salary: {$this->salary} rubles, his age: {$this->D_age}<br>");
    }

    public function designPicture() {
        print("While designing something, {$this->name} being bored<br>");
    }
}

$Emp1 = new Manager('Egor', 10000, 26);
$Emp2 = new Developer('Arsenii', 8000, 20);
$Emp3 = new Designer('Valera', 8000, 18);

$Emp1 -> getEmployeeInfo();
$Emp1 -> manageTeam();
$Emp2 -> getEmployeeInfo();
$Emp2 -> writeCode();
$Emp3 -> getEmployeeInfo();
$Emp3 -> designPicture();

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