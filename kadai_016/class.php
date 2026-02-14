<?php

class Food {
    public $name;
    public $price;

    public function set_price(int $price) {
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . '<br>';
    }
}

class Animal {
    public $name;
    public $height;
    public $weight;

    public function set_height(int $height) {
        $this->height = $height;
    }

    public function show_height() {
        echo $this->height;
    }
}

// インスタンス化する
$apple = new Food();
$dog = new Animal();

$apple->name = 'りんご';
$apple->price = 199;

$dog->name = 'いぬ';
$dog->height = 60;
$dog->weight = 10;

print_r($apple);
echo '<br>';
print_r($dog);
echo '<br>';
$apple->show_price();
$dog->show_height();
