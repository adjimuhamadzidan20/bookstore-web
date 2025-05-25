<?php
require '../../../configdb/config_db.php';
session_start();

if ($_GET['proses'] == 'hapus_buku') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_buku WHERE id_buku = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        $_SESSION['pesan'] = 'Data buku berhasil terhapus!';
        $_SESSION['status'] = 'success';

        header('Location: ../../index.php?hal=data_buku&section=buku');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
} else if ($_GET['proses'] == 'hapus_kategori') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_kategori WHERE id_kategori = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        $_SESSION['pesan'] = 'Kategori berhasil terhapus!';
        $_SESSION['status'] = 'success';

        header('Location: ../../index.php?hal=data_kategori&section=kategori');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
