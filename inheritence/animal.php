<?php
namespace Traits\animal;

// import class Food dari namepsce

// salah
// require_once './food.php';

// benar
require_once 'food.php';
use Traits\makanan\Food;


class Animal {
    // cara pakai class selain di extends
    use Food;

    // ini adalah function yang wajib di ovewrite dari class Food
    // jika function tersebut tidak di implementasikan maka akan muncul error
    public function wajib() {
        echo 'true' . PHP_EOL;
    }

    public $test = 'testing..' . PHP_EOL;


    public $arr = ["data" => ['ary', 'hebat', 'sekali']];

}


// echo 'halo';

$animal = new Animal();

$animal->wajib();

echo $animal->test;


// vcontoh loop bersaranag
foreach ($animal->arr as $keyParent) {
    foreach ($keyParent as $key => $value) {
    echo "$value" . PHP_EOL;
    }
}

