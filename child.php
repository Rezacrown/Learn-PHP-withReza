<?php

// wajib di isi untuk memanggil namespace
require_once './parent.php';

use Parent\ParentClass;

class ChildrenClass extends ParentClass {
    public $halo = 'halo ...';


    public static $halo2 = 'ini adalah static variable halo 2...';




    public function Halo() {
        echo "ini adalah fungsi biasa Halo" . PHP_EOL;
    }

    public static function Jalan() {
        echo 'ini adalah function static jalan' . PHP_EOL;
    }

}


$run = new ChildrenClass();

// biasa
$run->Halo();

echo "ini adalah varibel $run->halo" . PHP_EOL;

// static variable
// hanya bisa digunakan dalam pemanggilan ::, yang biasa tidak bisa digunakan
echo ChildrenClass::$halo2 . PHP_EOL;

// static  method
// static  method dapat dipanggil dengan cara biasa maupun versi :: nya
ChildrenClass::Jalan()

// var_dump('tets');

?>