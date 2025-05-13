<?php

$sql = "SELECT * FROM tb_user";
$query = mysqli_query($connectDB, $sql);

?>
<div class="row">
    <div class="col">
        <h1 class="mb-4">Data Pengguna</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Created At</th>
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
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['nama_pengguna']; ?></td>
                        <td><?= $data['jenis_kelamin']; ?></td>
                        <td><?= $data['no_telp']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['created_at']; ?></td>
                        <td>
                            <a href="halaman/process/proses_hapus.php?id=<?= $data['username']; ?>&proses=hapus_user" class="btn btn-primary btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>