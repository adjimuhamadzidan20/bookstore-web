<?php
require 'user/config_user/config_page_active.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($_SESSION['id_user'])) {
    ?>
        <title>Bookstore | <?= $_SESSION['nama_pengguna']; ?></title>
    <?php
    } else {
    ?>
        <title>Bookstore</title>
    <?php
    }
    ?>

    <style>
        .navbar {
            background-color: #0c2461;
        }

        .btn-primary {
            background-color: #0c2461 !important;
            border-color: #0c2461 !important;
        }

        .btn-primary:hover {
            background-color: green !important;
            border-color: green !important;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.php">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex gap-3">
                    <li class="nav-item">
                        <a class="nav-link <?= $active1; ?>" href="index.php?hal=beranda&section=beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active2; ?>" href="index.php?hal=tentang&section=tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active3; ?>" href="index.php?hal=kontak&section=kontak">Kontak</a>
                    </li>
                    <?php
                    if (isset($_SESSION['id_user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link <?= $active4; ?>" href="index.php?hal=pesanan&section=riwayat">Riwayat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $active5; ?>" href="index.php?hal=keranjang&section=keranjang">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user/config_user/proses_logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link active fw-bold"><?= $_SESSION['nama_pengguna']; ?></span>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=loginuser&section=login">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $active6; ?>" href="index.php?hal=loginuser&section=login">Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container p-3">
            <?php
            if (isset($_SESSION['pesan']) && isset($_SESSION['status'])) :
            ?>
                <div class="alert alert-<?= $_SESSION['status']; ?>" role="alert">
                    <?= $_SESSION['pesan']; ?>
                </div>
            <?php
                unset($_SESSION['pesan']);
                unset($_SESSION['status']);
            endif;
            ?>

            <?php require 'user/config_user/config_page.php'; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>