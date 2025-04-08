<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this -> title = $title;
        $this -> author = $author;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}<br>");
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this -> pages = $pages;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, have {$this->pages}<br>");
    }
}

class Video extends Material {
    public $lenght;

    public function __construct($title, $author, $lenght) {
        parent::__construct($title, $author);
        $this -> lenght = $lenght;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, is {$this->lenght} long<br>");
    }
}

class Article extends Material {
    public $artic;

    public function __construct($title, $author, $artic) {
        parent::__construct($title, $author);
        $this -> artic = $artic;
    }

    public function getMaterialInfo() {
        print("Title: {$this->title}, Author: {$this->author}, have these {$this->artic} artics<br>");
    }
}

$smth1 = new Book('Ghost in Pavlov', 'Pavik', 148);
$smth2 = new Video('Vector 2', 'BogdaN', '22:12');
$smth3 = new Article('The thing about articles idk', 'eGOR', 'ne, i, no');

$smth1 -> getMaterialInfo();
$smth2 -> getMaterialInfo();
$smth3 -> getMaterialInfo();

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