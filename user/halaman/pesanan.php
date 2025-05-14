<?php

$id = $_SESSION['id_user'];
$sql = "SELECT tb_pesanan.id_order, tb_pesanan.id_buku, tb_buku.judul_buku, tb_pesanan.id_user, tb_user.nama_pengguna, tb_pesanan.jumlah, tb_buku.harga, tb_pesanan.status, tb_pesanan.metode, tb_pesanan.created_at FROM tb_pesanan INNER JOIN tb_buku ON tb_pesanan.id_buku = tb_buku.id_buku INNER JOIN tb_user ON tb_pesanan.id_user = tb_user.id_user WHERE tb_pesanan.id_user = '$id'";

$query = mysqli_query($connectDB, $sql);
$data = mysqli_num_rows($query);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4 h2">Riwayat Pesanan</h1>

        <?php
        if ($data > 0) {
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Metode</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    while ($data = mysqli_fetch_assoc($query)) :
                        $no++;
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['judul_buku']; ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td><?= $data['harga']; ?></td>
                            <td class="text-capitalize text-success"><?= $data['status']; ?></td>
                            <td><?= $data['metode']; ?></td>
                            <td><?= $data['created_at']; ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
        <?php
        } else {
        ?>
            <div class="alert alert-info" role="alert">
                Riwayat pesanan belum ada, silahkan pesan beberapa buku!
            </div>
        <?php
        }
        ?>
    </div>
</div>