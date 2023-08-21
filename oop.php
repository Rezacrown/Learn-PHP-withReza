<?php

include_once './index.php';

foreach ($ary as $key => $value) {
    if($value === 'reza') {
        echo $key;

    } else {
        echo "tidak ada nilai yang ditemukan di: " . $key . PHP_EOL;
    };
};


?>