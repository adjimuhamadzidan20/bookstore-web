<?php

$sql = "SELECT * FROM tb_kategori";
$query = mysqli_query($connectDB, $sql);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4">Data Kategori</h1>
        <a href="index.php?hal=tambah_kategori" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Opsi</th>
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
                        <td><?= $data['kategori']; ?></td>
                        <td>
                            <a href="index.php?hal=ubah_kategori&id=<?= $data['id_kategori']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                            <a href="halaman/process/proses_hapus.php?id=<?= $data['id_kategori']; ?>&proses=hapus_kategori" class="btn btn-primary btn-sm" onclick="return confirm('Yakin ingin menghapusnya?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>