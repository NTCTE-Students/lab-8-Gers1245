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

interface Order {
    public function calculateTotal();
}

class OnlineOrder implements Order {
    private $discount = 5;
    public $product = 1000;

    public function calculateTotal($num) {
        $total = $num * $product * $discount;
    }
}

class StoreOrder implements Order {
    private $discount = 10;
    public $product = 1000;

    public function calculateTotal($num) {

    }
}

class TelephoneOrder implements Order {
    private $discount = 15;
    public $product = 1000;

    public function calculateTotal($num) {

    }
}

# Стало лень заканчивать это, но я в состоянии делать подобные задания... Ну или 90% из всех что я тут видел.