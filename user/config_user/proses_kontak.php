<?php
require '../../configdb/config_db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaPengirim = $_POST['nama_pengirim'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO tb_kontak (nama_pengirim, pesan) VALUES ('$namaPengirim', '$pesan')";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        $_SESSION['pesan'] = 'Pesan berhasil terkirim!';
        $_SESSION['status'] = 'success';

        header('Location: ../../index.php?hal=kontak');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
