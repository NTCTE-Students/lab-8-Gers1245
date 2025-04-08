<?php

interface Payment {
    public function process($num);
}

class CreditCardPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью кредитной карты на сумму: {$num}<br>");
    }
}

class PayPalPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью PayPal на сумму: {$num}<br>");
    }
}

class BankTransferPayment implements Payment {
    public function process($num) {
        print("Оплата с помощью перевода из другого банка на сумму: {$num}<br>");
    }
}

$smth1 = new CreditCardPayment();
$smth2 = new PayPalPayment();
$smth3 = new BankTransferPayment();

$smth1 -> process(1000);
$smth2 -> process(1000);
$smth3 -> process(1000);