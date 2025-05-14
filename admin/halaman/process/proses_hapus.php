<?php
require '../../../configdb/config_db.php';

if ($_GET['proses'] == 'hapus_buku') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_buku WHERE id_buku = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=data_buku');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
} else if ($_GET['proses'] == 'hapus_kategori') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_kategori WHERE id_kategori = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=data_kategori');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
