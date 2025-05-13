<?php
require '../../../configdb/config_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['proses'] == 'edit_buku') {
    $id = $_GET['id'];
    $judulBuku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // nama file gambar lama
    $gambarLama = $_POST['gambar_lama'];

    // cek apakah ada gambar baru
    if ($_FILES['gambar']['name']) {
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmp = $_FILES['gambar']['tmp_name'];
        $upload = '../../uploads/';

        if (!file_exists($upload)) {
            mkdir($upload, 0777, true);
        }

        // hapus gambar lama
        if (file_exists($upload . $gambarLama)) {
            unlink($upload . $gambarLama);
        }

        // pindah ke folder uploads
        $gambarPath = $upload . basename($gambarName);
        $moveFile = move_uploaded_file($gambarTmp, $gambarPath);
    } else {
        $gambarName = $gambarLama;
    }

    $sql = "UPDATE tb_buku SET judul_buku = '$judulBuku', penulis = '$penulis', penerbit = '$penerbit', 
    tahun = '$tahun', id_kategori = '$kategori', gambar = '$gambarName', harga = '$harga', stok = '$stok' WHERE id_buku = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=data_buku');
        exit;
    } else {
        echo 'Error :' . mysqli_error($connectDB);
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['proses'] == 'edit_kategori') {
    $id = $_GET['id'];
    $namaKategori = $_POST['kategori'];

    $sql = "UPDATE tb_kategori SET kategori = '$namaKategori' WHERE id_kategori = '$id'";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        header('Location: ../../index.php?hal=data_kategori');
        exit;
    } else {
        echo 'Error :' . mysqli_error($conn);
    }
}
