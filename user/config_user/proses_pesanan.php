<?php
require '../../config_db/config_db.php';

if ($_GET['iduser']) {
    $idUser = $_GET['iduser'];

    $sql = "SELECT tb_keranjang.id_cart, tb_user.id_user, tb_user.nama_pengguna, tb_buku.id_buku, tb_buku.judul_buku, 
    tb_buku.harga, tb_keranjang.jumlah FROM tb_keranjang INNER JOIN tb_user ON tb_keranjang.id_user = tb_user.id_user 
    INNER JOIN tb_buku ON tb_keranjang.id_buku = tb_buku.id_buku WHERE tb_user.id_user = '$idUser'";

    $query = mysqli_query($connectDB, $sql);

    while ($pesanan = mysqli_fetch_assoc($query)) {
        $idBuku = $pesanan['id_buku'];
        $idUser = $pesanan['id_user'];
        $jumlah = $pesanan['jumlah'];
        $status = 'pending';
        $metode = 'transfer-bank';

        $sqlInsert = "INSERT INTO tb_pesanan (id_buku, id_user, jumlah, status, metode)
        VALUES ('$idBuku', '$idUser', '$jumlah', '$status', '$metode')";

        mysqli_query($connectDB, $sqlInsert);
    }

    $sqlReset = "DELETE FROM tb_keranjang WHERE id_user = '$idUser'";
    mysqli_query($connectDB, $sqlReset);

    if ($query) {
        header('Location: ../../index.php?hal=data_buku');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
}
