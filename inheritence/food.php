<?php

namespace Traits\makanan;

// trait sama seperti class hanya saja dalam penggunaannya, hanya boleh di ovewrite ke dalam child class nya jadi tidak bisa langsung di lakukan instance new object nya
// dengan trait kita bisa melakukan extends lebih dari satu class dalam pewarisannyal
trait Food {
    public string $apple = 'buah apel';


    public function callTrait() {
        echo 'ini adalah trait';
    }

    public static function hello() {
        echo 'ini adalah static function dari trait' . PHP_EOL;
    }

    public static $hai = 'hai ini static variable dari trait' . PHP_EOL;


    // dengan kata kunci abtract maka kita wajib untuk mengowrite function tersebut di child class nya
    // untuk menggunakan fitur ini, class parent wajib harus diberi kata kunci abstract juga agar function didalamnya bisa aktif sebagai absrtact function
    abstract public function wajib();

}



// tidak bisa digunakan karena ini adalah trait
// $food = new Food();
// $food->callTrait();

// jika untuk static function & varibel static maka bisa tetap akses tanpa harus menulis di child class tersebut instance nya
Food::hello();
echo Food::$hai;