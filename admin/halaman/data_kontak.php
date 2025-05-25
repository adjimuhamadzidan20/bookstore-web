<?php

$sql = "SELECT * FROM tb_kontak";

$query = mysqli_query($connectDB, $sql);
$jumlahData = mysqli_num_rows($query);

?>

<div class="row">
    <div class="col">
        <h1 class="mb-4 h2">Data Kontak</h1>

        <?php
        if ($jumlahData == 0) {
        ?>
            <div class="alert alert-primary mt-2" role="alert">
                Data kontak belum tersedia..
            </div>
        <?php
        } else {
        ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Pesan</th>
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
                            <td scope="row" class="text-center"><?= $no; ?></td>
                            <td><?= $data['nama_pengirim']; ?></td>
                            <td><?= $data['pesan']; ?></td>
                            <td><?= $data['created_at']; ?></td>
                        </tr>
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