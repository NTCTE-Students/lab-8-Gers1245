<?php
/* Прикольный шаблон хз правда для чего ну ладно
interface X {
    public function z($a);
}

class Y implements X {
    public function z($a) {

    }
}
*/

interface Database {
    public function connect($smth1);
    public function query();
}

class MySQLDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}

class PostgreSQLDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}

class SQLiteDatabase implements Database {
    public $database;

    public function connect($smth1) {
        $this -> database = $smth1;
        print("Connecting to {$this->database}<br>");
    }

    public function query() {
        print("Making query to {$this->database}<br>");
    }
}

$idk1 = new MySQLDatabase();
$idk2 = new PostgreSQLDatabase();
$idk3 = new SQLiteDatabase();

$idk1 -> connect('aboba1.db');
$idk1 -> query();
$idk2 -> connect('aboba2.db');
$idk2 -> query();
$idk3 -> connect('aboba3.db');
$idk3 -> query();