<?php
require '../../configdb/config_db.php';
session_start();

if ($_GET['idbuku'] && $_GET['iduser']) {
    $idBuku = $_GET['idbuku'];
    $idUser = $_GET['iduser'];

    $sqlCart = "SELECT * FROM tb_keranjang WHERE id_user = '$idUser' AND id_buku = '$idBuku'";
    $queryCart = mysqli_query($connectDB, $sqlCart);
    $dataCart = mysqli_num_rows($queryCart);

    if ($dataCart == 1) {
        $_SESSION['pesan'] = 'Buku sudah ada di keranjang!';
        $_SESSION['status'] = 'warning';

        header('Location: ../../index.php');
        exit;
    } else {
        $sql = "INSERT INTO tb_keranjang VALUES ('', '$idUser', '$idBuku', 1)";
        $query = mysqli_query($connectDB, $sql);

        if ($query) {
            $_SESSION['pesan'] = 'Buku ditambahkan ke keranjang!';
            $_SESSION['status'] = 'success';

            header('Location: ../../index.php');
            exit;
        } else {
            echo 'Error :' . mysqli_error($connectDB);
        }
    }
}
