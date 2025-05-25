<?php
require '../../../configdb/config_db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['proses'] == 'tambah_buku') {
    $judulBuku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $gambarName = $_FILES['gambar']['name'];
    $gambarTmp = $_FILES['gambar']['tmp_name'];
    $upload = '../../uploads/';

    if (!file_exists($upload)) {
        mkdir($upload, 0777, true);
    } else {
        $gambarPath = $upload . basename($gambarName);
        $moveFile = move_uploaded_file($gambarTmp, $gambarPath);

        if ($moveFile) {
            $sql = "INSERT INTO tb_buku VALUES ('', '$judulBuku', '$penulis', '$penerbit', '$tahun', '$kategori', '$gambarName', '$harga', '$stok')";
            $query = mysqli_query($connectDB, $sql);

            if ($query) {
                $_SESSION['pesan'] = 'Data buku berhasil ditambahkan!';
                $_SESSION['status'] = 'success';

                header('Location: ../../index.php?hal=data_buku&section=buku');
                exit;
            } else {
                echo 'Error :' . mysqli_error($connectDB);
            }
        } else {
            header('Location: ../../index.php?hal=data_buku');
            exit;
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['proses'] == 'tambah_kategori') {
    $namaKategori = $_POST['kategori'];

    $sql = "INSERT INTO tb_kategori VALUES ('', '$namaKategori')";
    $query = mysqli_query($connectDB, $sql);

    if ($query) {
        $_SESSION['pesan'] = 'Kategori berhasil ditambahkan!';
        $_SESSION['status'] = 'success';

        header('Location: ../../index.php?hal=data_kategori&section=kategori');
        exit;
    } else {
        echo 'Error :' . mysqli_error($conn);
    }
}
