<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this -> username = $username;
        $this -> password = $password;
    }

    public function setPassword($word) {
        $this -> password = $word;
        //debug
        print("{$this->password}<br>");
    }

    public function checkPassword($word) {
        if ($word == $this->password) {
            print('Правльно!<br>');
        } else {
            print('Ты где-то накосячил...<br>');
        }
    }

    public function debugInfo() {
        print("{$this->username}, {$this->password}<br>");
    }
}

$smth1 = new User('aboba',4123);
$smth1 -> setPassword(5812);
$smth1 -> checkPassword(5812);
$smth1 -> setPassword('/'); // Хотел бы я с этим разобраться да мне лень вписывать символы...
$smth1 -> checkPassword('/'); // работает всё равно но пофиг...