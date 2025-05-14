<?php

$id = $_GET['id'];

$sql = "SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_buku.penulis, tb_buku.penerbit, tb_buku.tahun, 
tb_buku.id_kategori, tb_kategori.kategori, tb_buku.gambar, tb_buku.harga, tb_buku.stok FROM tb_buku 
INNER JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori WHERE tb_buku.id_buku = '$id'";

$query = mysqli_query($connectDB, $sql);
$data = mysqli_fetch_assoc($query);

$sqlKategori = "SELECT * FROM tb_kategori";
$queryKat = mysqli_query($connectDB, $sqlKategori);

?>

<div class="row">
    <div class="col-7">
        <h1 class="mb-4 h2">Edit Buku</h1>
        <div class="card">
            <div class="card-body">
                <form action="halaman/process/proses_edit.php?proses=edit_buku&id=<?= $data['id_buku']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="gambar_lama" value="<?= $data['gambar']; ?>" hidden>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['judul_buku']; ?>" name="judul_buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" value="<?= $data['penulis']; ?>" name="penulis" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" value="<?= $data['penerbit']; ?>" name="penerbit" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Tahun</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" value="<?= $data['tahun']; ?>" name="tahun" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example" name="kategori" required>
                                    <?php
                                    while ($dataKat = mysqli_fetch_assoc($queryKat)) :
                                    ?>
                                        <option value="<?= $dataKat['id_kategori'] ?>" <?= ($dataKat['id_kategori'] == $data['id_kategori']) ? 'selected' : ''; ?>><?= $dataKat['kategori'] ?></option>
                                    <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label><br>
                                <img src="uploads/<?= $data['gambar']; ?>" alt="gambar" class="mb-3 img-thumbnail" style="width: 100px; height: 70px;">
                                <input class="form-control" type="file" id="formFile" name="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" value="<?= $data['harga']; ?>" name="harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Stok</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" value="<?= $data['stok']; ?>" name="stok" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>