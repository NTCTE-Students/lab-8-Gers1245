<?php

class Counter {
    private $count;

    public function __construct($count = 0) {
        $this -> count = $count;
    }

    public function getCount() {
        print("Current count is: {$this->count}<br>");
    }

    public function increment($num) {
        $this -> count += abs($num);
    }

    public function decrement($num) {
        if ($num <= $this->count) {
            $this -> count -= abs($num);
        } else {
            print('error, null<br>');
        }
    }
}

$smth1 = new Counter();
$smth1 -> getCount();
$smth1 -> increment(10);
$smth1 -> getCount();
$smth1 -> decrement(10);
$smth1 -> getCount();
$smth1 -> decrement(10);
$smth1 -> getCount();
$smth1 -> increment(-10);
$smth1 -> getCount();
$smth1 -> decrement(-10);
$smth1 -> getCount();