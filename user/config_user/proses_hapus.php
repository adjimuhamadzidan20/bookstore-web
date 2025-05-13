<?php
require '../../configdb/config_db.php';

if ($_GET['id']) {
    $idCart = $_GET['id'];

    $sql = "DELETE FROM tb_keranjang WHERE id_cart = '$idCart'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=keranjang');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
