<?php
require 'config_admin/config_page_active.php';
session_start();

if (!isset($_SESSION['id_admin'])) {
    header('Location: login_admin.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore | Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.php">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex gap-3">
                    <li class="nav-item">
                        <a class="nav-link <?= $active1; ?>" href="index.php?hal=data_kategori&section=kategori">Data Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active2; ?>" href="index.php?hal=data_buku&section=buku">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active3; ?>" href="index.php?hal=data_pengguna&section=pengguna">Data Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active4; ?>" href="index.php?hal=data_pesanan&section=pesanan">Data Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="halaman/process/proses_logout_admin.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link active fw-bold"><?= $_SESSION['nama_admin']; ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container p-3">
            <?php require 'config_admin/config_page.php'; ?>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>