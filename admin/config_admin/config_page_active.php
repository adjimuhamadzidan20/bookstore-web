<?php

if (@$_GET['section'] == 'kategori' || @$_GET['section'] == 'hal_tambah_kategori' || @$_GET['section'] == 'hal_edit_kategori') {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'buku' || @$_GET['section'] == 'hal_tambah_buku' || @$_GET['section'] == 'hal_edit_buku') {
    $active1 = '';
    $active2 = 'active';
    $active3 = '';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'pengguna') {
    $active1 = '';
    $active2 = '';
    $active3 = 'active';
    $active4 = '';
    $active5 = '';
} else if (@$_GET['section'] == 'pesanan') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'active';
    $active5 = '';
} else if (@$_GET['section'] == 'kontak') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = 'active';
} else {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
}
