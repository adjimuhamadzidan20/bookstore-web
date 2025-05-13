<?php
require '../../configdb/config_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namaLengkap = $_POST['nama_lengkap'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $noTelp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $passwordEnkrip = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO tb_user (username, password, nama_pengguna, jenis_kelamin, no_telp, alamat) 
    VALUES ('$username', '$passwordEnkrip', '$namaLengkap', '$jenisKelamin', '$noTelp', '$alamat')";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=loginuser');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
