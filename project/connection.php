<?php

$host = '';


// init isi confignya
$hostname = 'localhost';
$username = "root";
$password = null;


// buat koneksi nya
$koneki = new mysqli(hostname: $hostname, username: $username, password:$password);


// untuk cek koneksi database sudah konek apa belum
if($koneki->connect_error){
    var_dump('ada error koneksi');
} else {
    var_dump('koneksi sukses');
}

// cara buat database menggunakan query di php mysql
// sql query
$queryCreateDatabase = 'CREATE DATABASE belajar_php';
// create database if dont exist
if ($koneki->query($queryCreateDatabase) === TRUE) {
    echo "Database berahasil dibuat";
  } else {
    echo "Error database gagal dibuat, dengan error: " . $koneki->error;
  }




