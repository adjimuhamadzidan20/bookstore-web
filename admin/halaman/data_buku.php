<?php

$sql = "SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_buku.penulis, tb_buku.penerbit, tb_buku.tahun, 
tb_buku.id_kategori, tb_kategori.kategori, tb_buku.gambar, tb_buku.harga, tb_buku.stok FROM tb_buku 
INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori ORDER BY id_buku DESC";

$query = mysqli_query($connectDB, $sql);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4">Data Buku</h1>
        <a href="index.php?hal=tambah_buku" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
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
                        <td><?= $data['judul_buku']; ?></td>
                        <td><?= $data['penulis']; ?></td>
                        <td><?= $data['penerbit']; ?></td>
                        <td><?= $data['tahun']; ?></td>
                        <td><?= $data['kategori']; ?></td>
                        <td>
                            <img src="uploads/<?= $data['gambar']; ?>" alt="gambar_sampul" width="80" height="45">
                        </td>
                        <td><?= $data['harga']; ?></td>
                        <td><?= $data['stok']; ?></td>
                        <td>
                            <a href="index.php?hal=ubah_buku&id=<?= $data['id_buku']; ?>" class="btn btn-primary btn-sm">Ubah</a>
                            <a href="halaman/process/proses_hapus.php?id=<?= $data['id_buku']; ?>&proses=hapus_buku" class="btn btn-primary btn-sm" onclick="return confirm('Yakin ingin menghapusnya?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>