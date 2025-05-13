<?php

$user = $_SESSION['id_user'];
$sql = "SELECT tb_keranjang.id_cart, tb_user.id_user, tb_user.nama_pengguna, tb_buku.id_buku, tb_buku.judul_buku, 
tb_buku.harga, tb_keranjang.jumlah FROM tb_keranjang INNER JOIN tb_user ON tb_keranjang.id_user = tb_user.id_user INNER JOIN 
tb_buku ON tb_keranjang.id_buku = tb_buku.id_buku WHERE tb_user.id_user = '$user'";

$query = mysqli_query($connectDB, $sql);
$data = mysqli_num_rows($query);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4">Keranjang</h1>
        <?php
        if ($data > 0) {
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    $total = 0;
                    while ($data = mysqli_fetch_assoc($query)) :
                        $no++;
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['judul_buku']; ?></td>
                            <td><?= 'Rp. ' . number_format($data['harga'], 0, ',', '.'); ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td>
                                <a href="user/config_user/proses_hapus.php?id=<?= $data['id_cart']; ?>" class="btn btn-primary btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $total += $data['harga'] * $data['jumlah'];
                    endwhile;
                    ?>
                </tbody>
            </table>
            <p class="fw-bold">Total harga : <?= 'Rp. ' . number_format($total, 0, ',', '.'); ?></p>
            <a href="user/halaman/checkout.php?&id=<?= $_SESSION['id_user']; ?>" class="btn btn-success">Checkout</a>
        <?php } else { ?>
            <div class="alert alert-info" role="alert">
                Data keranjang anda belum ada, silahkan pilih beberapa buku!
            </div>
        <?php } ?>
    </div>
</div>