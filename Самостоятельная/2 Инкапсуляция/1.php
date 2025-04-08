<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this -> accountNumber = $accountNumber;
        $this -> balance = $balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            $this -> balance += $amount;
        } else /* Debug */{
            print("Ошибка");
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this -> balance -= $amount;
        } else /* Debug */{
            print("Ошибка");
        }
    }

    public function getBalance() {
        print("Ваш баланс равен: {$this->balance}<br>");
    }

    public function debugInfo() {
        print("{$this->accountNumber}, {$this->balance}<br>");
    }
}

$human1 = new BankAccount(82731);
$human1 -> debugInfo();
$human1 -> deposit(1000);
$human1 -> debugInfo();
$human1 -> withdraw(1000);
$human1 -> debugInfo();
$human1 -> withdraw(1000);