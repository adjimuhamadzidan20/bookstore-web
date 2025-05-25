<?php

$sql = "SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_buku.penulis, tb_buku.penerbit, tb_buku.tahun, 
tb_buku.id_kategori, tb_kategori.kategori, tb_buku.gambar, tb_buku.harga, tb_buku.stok FROM tb_buku 
INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori ORDER BY id_buku DESC";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['keyword'])) {
    $judul = $_GET['keyword'];

    $sql = "SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_buku.penulis, tb_buku.penerbit, tb_buku.tahun, 
    tb_buku.id_kategori, tb_kategori.kategori, tb_buku.gambar, tb_buku.harga, tb_buku.stok FROM tb_buku 
    INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori WHERE tb_buku.judul_buku 
    LIKE '%$judul%'";
}

$query = mysqli_query($connectDB, $sql);
$jumlahData = mysqli_num_rows($query);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-3 h2">Semua buku</h1>
        <form method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari judul.." aria-describedby="button-addon2" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    </div>
</div>

<div class="row mt-3 mb-5">
    <?php
    if ($jumlahData == 0) {
    ?>
        <div class="alert alert-info" role="alert">
            Data buku belum tersedia..
        </div>
    <?php
    } else {
    ?>
        <?php
        while ($data = mysqli_fetch_assoc($query)) :
        ?>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="admin/uploads/<?= $data['gambar']; ?>" class="card-img-top object-fit-cover" alt="gambar" height="400">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['judul_buku']; ?></h5>
                        <p class="card-text fw-bold mb-2">Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></p>
                        <p class="card-text mb-0">Kategori <?= $data['kategori']; ?></p>
                        <p class="card-text mb-0">Penulis <?= $data['penulis']; ?></p>
                        <p class="card-text">Penerbit <?= $data['penerbit']; ?></p>

                        <?php
                        if (isset($_SESSION['id_user'])) {
                        ?>
                            <a href="user/config_user/proses_addcart.php?idbuku=<?= $data['id_buku']; ?>&iduser=<?= $_SESSION['id_user']; ?>" class="btn btn-primary">Add Cart</a>
                        <?php
                        } else {
                        ?>
                            <a href="index.php?hal=loginuser" class="btn btn-primary">Add Cart</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    <?php
    }
    ?>
</div>
</div>