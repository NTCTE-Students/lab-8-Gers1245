<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

$smth1 = new EmailNotifier();
$smth2 = new SMSNotifier();
$smth1 -> send('aboba');
$smth2 -> send('biba');