<?php

if (@$_GET['section'] == 'kategori') {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
} else if (@$_GET['section'] == 'buku') {
    $active1 = '';
    $active2 = 'active';
    $active3 = '';
    $active4 = '';
} else if (@$_GET['section'] == 'pengguna') {
    $active1 = '';
    $active2 = '';
    $active3 = 'active';
    $active4 = '';
} else if (@$_GET['section'] == 'pesanan') {
    $active1 = '';
    $active2 = '';
    $active3 = '';
    $active4 = 'active';
} else {
    $active1 = 'active';
    $active2 = '';
    $active3 = '';
    $active4 = '';
}
