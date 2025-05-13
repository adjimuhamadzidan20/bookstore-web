<?php

$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'bookstore';

$connectDB = mysqli_connect($localhost, $username, $password, $database);
if (!$connectDB) {
    echo 'koneksi database gagal, ' . mysqli_connect_error();
}
