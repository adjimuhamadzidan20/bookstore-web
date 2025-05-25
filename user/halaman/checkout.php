<?php
require '../../configdb/config_db.php';

$id = $_GET['id'];

// get data buku
$sqlBuku = "SELECT tb_keranjang.id_cart, tb_user.id_user, tb_user.nama_pengguna, tb_buku.id_buku, tb_buku.judul_buku, 
tb_buku.harga, tb_keranjang.jumlah FROM tb_keranjang INNER JOIN tb_user ON tb_keranjang.id_user = tb_user.id_user 
INNER JOIN tb_buku ON tb_keranjang.id_buku = tb_buku.id_buku WHERE tb_user.id_user = '$id'";
$query = mysqli_query($connectDB, $sqlBuku);

// get data buku untuk jumlah
$sqlJumlah = "SELECT tb_keranjang.id_cart, tb_user.id_user, tb_user.nama_pengguna, tb_buku.id_buku, tb_buku.judul_buku, 
tb_buku.harga, tb_keranjang.jumlah FROM tb_keranjang INNER JOIN tb_user ON tb_keranjang.id_user = tb_user.id_user 
INNER JOIN tb_buku ON tb_keranjang.id_buku = tb_buku.id_buku WHERE tb_user.id_user = '$id'";
$query2 = mysqli_query($connectDB, $sqlJumlah);

// get data user
$sqlUser = "SELECT id_user, nama_pengguna, jenis_kelamin, no_telp, alamat FROM tb_user WHERE id_user = '$id'";
$query3 = mysqli_query($connectDB, $sqlUser);
$dataUser = mysqli_fetch_assoc($query3);

$total = 0;
while ($data = mysqli_fetch_assoc($query2)) {
    $total += $data['harga'] * $data['jumlah'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore | Checkout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        .btn-primary {
            background-color: #0c2461 !important;
            border-color: #0c2461 !important;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <div class="row mb-5 justify-content-center">
            <div class="col-7">
                <h3 class="mb-3">Checkout Pesanan Buku</h3>
                <div class="card px-2">
                    <div class="card-body">
                        <h4 class="mb-3">Detail Pesanan</h4>
                        <div class="row border-bottom border-top mb-3">
                            <div class="col mt-3 mb-3">
                                <ul>
                                    <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                                        <li>
                                            <?= $data['judul_buku'] ?> (<?= $data['jumlah'] ?>) - Rp. <?= number_format($data['harga'], 0, ',', '.'); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <b>Total Jumlah : Rp. <?= number_format($total, 0, ',', '.'); ?></b>
                            </div>
                        </div>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nama Lengkap</label>
                                    <input type="text" class="form-control" value="<?= $dataUser['nama_pengguna']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Jenis Kelamin</label>
                                    <input type="text" class="form-control" value="<?= $dataUser['jenis_kelamin']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">No Telp</label>
                                    <input type="text" class="form-control" value="<?= $dataUser['no_telp']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Alamat</label>
                                    <textarea class="form-control" rows="2" readonly><?= $dataUser['alamat']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <h4>Cara Pembayaran</h4>
                                <p>Metode pembayaran menggunakan transfer bank ke rekening berikut ini:</p>
                                <div class="card bg-body-tertiary border-0 text-secondary mb-3">
                                    <div class="card-body pb-0" style="text-align: justify;">
                                        <p><b>BANK BNI</b></p>
                                        <p>No. Rekening : <br><b>1111 3333 5555</b></p>
                                        <p>Atas Nama : <br><b>BOOKSTORE</b></p>
                                        <p>Total : <br><b>Rp. <?= number_format($total, 0, ',', '.'); ?></b></p>
                                        <p>Kode Referensi : <br><b>OR-<?= date('dmY') ?>-<?= $dataUser['id_user']; ?></b></p>
                                    </div>
                                </div>

                                <p>Untuk konfirmasi pembayaran, silahkan kirimkan bukti transaksi jika sudah melakukan pembayaran ke <b>Whatsapp Official toko kami : 0812-1212-1999</b>, Jika belum atau tidak melakukan konfirmasi, pesanan tidak kami proses.</p>
                            </div>
                            <div class="d-flex gap-2 mt-2 border-top pt-3">
                                <a href="../../index.php?hal=keranjang" class="btn btn-primary w-100">Kembali</a>
                                <a href="../config_user/proses_pesanan.php?iduser=<?= $dataUser['id_user']; ?>" class="btn btn-primary w-100">Buat Pesanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>

</html>