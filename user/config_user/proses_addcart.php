<?php
require '../../configdb/config_db.php';

if ($_GET['idbuku'] && $_GET['iduser']) {
    $idBuku = $_GET['idbuku'];
    $idUser = $_GET['iduser'];

    $sql = "INSERT INTO tb_keranjang VALUES ('', '$idUser', '$idBuku', 1)";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
