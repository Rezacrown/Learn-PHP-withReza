<?php

$host = '';


// init isi confignya
$hostname = 'localhost';
$username = "root";
$password = null;
$db_name = 'belajar_php';


// buat koneksi nya
$koneki = new mysqli(hostname: $hostname, username: $username, password:$password, database: $db_name);


// untuk cek koneksi database sudah konek apa belum
// if($koneki->connect_error){
//     var_dump('ada error koneksi');
// } else {
//     var_dump('koneksi sukses');
// }

// create table
$sqlQuery = "CREATE TABLE user (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL UNIQUE,
    email VARCHAR(30) NOT NULL UNIQUE,
    address TEXT 
)";
// eksekusi query nya
// if ($koneki->query($sqlQuery) === TRUE) {
//     echo "Table created successfully";
//   } else {
//     echo "Error creating table: " . $koneki->error;
//   }


// insert data
$table = 'user';
$sqlInsert = "INSERT INTO $table (name, email, address) VALUES ('Aksa Timotius', 'Aksa@GMAIL.COM', 'kakajaj')";
// if ($koneki->query($sqlInsert) === TRUE) {
//     echo "insert data successfully" . PHP_EOL;
//   } else {
//     echo "Error insert table: " . $koneki->error;
//   }


// find all data

$sqlselectAll = "SELECT * FROM $table";

$semuaData = $koneki->query($sqlselectAll);
// looping untuk keluarin data
// foreach ($semuaData as $value) {
//     // pilih isi data yang mau di select untuk di echo
//     $id = (string) $value['ID'];
//     $name = (string) $value['name'];
//     $address = (string) $value['address'];



//     // keluarin isi data
//     echo "ID ku adalah: $id " . PHP_EOL;
//     echo "namaku adalah: $name " . PHP_EOL;
//     echo "alamat ku berada di: $address " . PHP_EOL;

//     echo PHP_EOL;

//     // log isi data
//     // var_dump($name);
// }









