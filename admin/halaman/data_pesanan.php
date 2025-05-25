<?php

$sql = "SELECT tb_pesanan.id_order, tb_pesanan.id_buku, tb_buku.judul_buku, tb_pesanan.id_user, tb_user.nama_pengguna, tb_pesanan.jumlah, tb_buku.harga, tb_pesanan.status, tb_pesanan.metode, tb_pesanan.created_at FROM tb_pesanan INNER JOIN tb_buku ON tb_pesanan.id_buku = tb_buku.id_buku INNER JOIN tb_user ON tb_pesanan.id_user = tb_user.id_user";

$query = mysqli_query($connectDB, $sql);
$jumlahData = mysqli_num_rows($query);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4 h2">Daftar Pesanan</h1>

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

        <?php
        if ($jumlahData == 0) {
        ?>
            <div class="alert alert-primary mt-2" role="alert">
                Data pesanan belum tersedia..
            </div>
        <?php
        } else {
        ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col" class="text-center">Jumlah</th>
                        <th scope="col" class="text-center">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Metode</th>
                        <th scope="col">Waktu</th>
                        <th scope="col" class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    while ($data = mysqli_fetch_assoc($query)) :
                        $no++;
                    ?>
                        <form action="halaman/process/proses_status.php?id=<?= $data['id_order']; ?>" method="post">
                            <tr>
                                <td scope="row" class="text-center"><?= $no; ?></td>
                                <td scope="row"><?= 'USR0' . $data['id_user']; ?></td>
                                <td><?= $data['nama_pengguna']; ?></td>
                                <td><?= $data['judul_buku']; ?></td>
                                <td class="text-center"><?= $data['jumlah']; ?></td>
                                <td><?= 'Rp. ' . number_format($data['harga'], 0, ',', '.'); ?></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="pending" <?= $data['status'] == 'pending' ? 'selected' : ''; ?>>Pending</option>
                                        <option value="proses" <?= $data['status'] == 'proses' ? 'selected' : ''; ?>>Proses</option>
                                        <option value="dikirim" <?= $data['status'] == 'dikirim' ? 'selected' : ''; ?>>Dikirim</option>
                                        <option value="dibatalkan" <?= $data['status'] == 'dibatalkan' ? 'selected' : ''; ?>>Dibatalkan</option>
                                    </select>
                                </td>
                                <td><?= $data['metode']; ?></td>
                                <td><?= $data['created_at']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm">Ubah Status</button>
                                </td>
                            </tr>
                        </form>
                    <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
</div>