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

interface Document {
    public function save($smth);
}

class PDFDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as PDF document<br>");
    }
}

class WordDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as Word document<br>");
    }
}

class ExcelDocument implements Document {
    public function save($smth) {
        print("Saving {$smth} as Excel document<br>");
    }
}

$smth1 = new PDFDocument();
$smth2 = new WordDocument();
$smth3 = new ExcelDocument();

$smth1 -> save('Aboba1');
$smth2 -> save('Aboba2');
$smth3 -> save('Aboba3');