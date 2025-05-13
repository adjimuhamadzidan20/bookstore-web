<?php
require '../configdb/config_db.php';

if (isset($_GET['hal'])) {
    $bagian = $_GET['hal'];

    if ($bagian == 'data_buku') {
        include 'halaman/data_buku.php';
    } else if ($bagian == 'tambah_buku') {
        include 'halaman/tambah_buku.php';
    } else if ($bagian == 'ubah_buku') {
        include 'halaman/edit_buku.php';
    } else if ($bagian == 'data_kategori') {
        include 'halaman/data_kategori.php';
    } else if ($bagian == 'tambah_kategori') {
        include 'halaman/tambah_kategori.php';
    } else if ($bagian == 'ubah_kategori') {
        include 'halaman/edit_kategori.php';
    } else if ($bagian == 'data_pesanan') {
        include 'halaman/data_pesanan.php';
    } else if ($bagian == 'data_pengguna') {
        include 'halaman/data_user.php';
    } else {
        include 'halaman/data_kategori.php';
    }
} else {
    include 'halaman/data_kategori.php';
}
