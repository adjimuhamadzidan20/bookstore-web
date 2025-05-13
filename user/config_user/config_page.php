<?php

require 'config_db/config_db.php';

if (isset($_GET['hal'])) {
    $bagian = $_GET['hal'];

    if ($bagian == 'beranda') {
        include 'user/halaman/beranda.php';
    } else if ($bagian == 'tentang') {
        include 'user/halaman/tentang.php';
    } else if ($bagian == 'kontak') {
        include 'user/halaman/kontak.php';
    } else if ($bagian == 'keranjang') {
        include 'user/halaman/keranjang.php';
    } else if ($bagian == 'pesanan') {
        include 'user/halaman/pesanan.php';
    } else if ($bagian == 'loginuser') {
        include 'user/halaman/login_user.php';
    } else if ($bagian == 'regisuser') {
        include 'user/halaman/register_user.php';
    } else {
        include 'user/halaman/beranda.php';
    }
} else {
    include 'user/halaman/beranda.php';
}
