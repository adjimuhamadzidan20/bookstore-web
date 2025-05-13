<?php
require '../../configdb/config_db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username'";
    $query = mysqli_query($connectDB, $sql);
    $data = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) == 1) {
        if (password_verify($password, $data['password'])) {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama_pengguna'] = $data['nama_pengguna'];

            header('Location: ../../index.php');
            exit;
        }
    } else {
        echo 'Username atau password salah';
    }
}
