<?php

$sql = "SELECT * FROM tb_user";
$query = mysqli_query($connectDB, $sql);

?>
<div class="row">
    <div class="col">
        <h1 class="mb-4 h2">Daftar Pengguna</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($data = mysqli_fetch_assoc($query)) :
                    $no++;
                ?>
                    <tr>
                        <td scope="row" class="text-center"><?= $no; ?></td>
                        <td><?= 'USR0' . $data['id_user']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['nama_pengguna']; ?></td>
                        <td><?= $data['jenis_kelamin']; ?></td>
                        <td><?= $data['no_telp']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['created_at']; ?></td>
                    </tr>
                <?php
                endwhile;
                ?>
            </tbody>
        </table>
    </div>
</div>