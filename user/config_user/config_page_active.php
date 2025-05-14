<?php

if (@$_GET['section'] == 'beranda') {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
} else if (@$_GET['section'] == 'tentang') {
    $active1 = '';
    $active2 = 'active';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
} else if (@$_GET['section'] == 'kontak') {
    $active1 = '';
    $active2 = '';
    $active3 = 'active';
    $active4 = '';
    $active5 = '';
    $active6 = '';
} else if (@$_GET['section'] == 'riwayat') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'active';
    $active5 = '';
    $active6 = '';
} else if (@$_GET['section'] == 'keranjang') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = 'active';
    $active6 = 'active';
} else if (@$_GET['section'] == 'login') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = 'active';
} else {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
    $active5 = '';
    $active6 = '';
}
