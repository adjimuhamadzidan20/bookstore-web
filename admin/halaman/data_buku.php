<?php

$sql = "SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_buku.penulis, tb_buku.penerbit, tb_buku.tahun, 
tb_buku.id_kategori, tb_kategori.kategori, tb_buku.gambar, tb_buku.harga, tb_buku.stok FROM tb_buku 
INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori ORDER BY id_buku ASC";

$query = mysqli_query($connectDB, $sql);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4 h2">Daftar Buku</h1>
        <a href="index.php?hal=tambah_buku" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col" class="text-center">Tahun</th>
                    <th scope="col">Kategori</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($data = mysqli_fetch_assoc($query)) :
                    $no++;
                ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $data['judul_buku']; ?></td>
                        <td><?= $data['penulis']; ?></td>
                        <td><?= $data['penerbit']; ?></td>
                        <td class="text-center"><?= $data['tahun']; ?></td>
                        <td><?= $data['kategori']; ?></td>
                        <td class="text-center">
                            <img src="uploads/<?= $data['gambar']; ?>" alt="gambar_sampul" class="img-thumbnail" style="width: 80px; height: 50px;">
                        </td>
                        <td><?= 'Rp. ' . number_format($data['harga'], 0, ',', '.'); ?></td>
                        <td class=" text-center"><?= $data['stok']; ?>
                        </td>
                        <td class="text-center">
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