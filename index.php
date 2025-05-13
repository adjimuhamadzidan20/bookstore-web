<?php
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
        <title>Bookstore | User</title>
    <?php
    } else {
    ?>
        <title>Bookstore</title>
    <?php
    }
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.php">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=kontak">Kontak</a>
                    </li>
                    <?php
                    if (isset($_SESSION['id_user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=pesanan">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=keranjang">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link"><?= $_SESSION['nama_pengguna']; ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user/config_user/proses_logout.php">Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=loginuser">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?hal=loginuser">Login</a>
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
            <?php require 'user/config_user/config_page.php'; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>