<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'db_siswa'; 

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
