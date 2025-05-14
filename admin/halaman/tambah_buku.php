<?php

$sql = "SELECT * FROM tb_kategori";
$query = mysqli_query($connectDB, $sql);

?>

<div class="row">
    <div class="col-7">
        <h1 class="mb-4 h2">Tambah Buku</h1>
        <div class="card">
            <div class="card-body">
                <form action="halaman/process/proses_tambah.php?proses=tambah_buku" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama judul buku" name="judul_buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Penulis" name="penulis" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Penerbit" name="penerbit" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Tahun</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Tahun terbit" name="tahun" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example" name="kategori" required>
                                    <option selected>-- Pilih Kategori --</option>
                                    <?php
                                    while ($data = mysqli_fetch_assoc($query)) :
                                    ?>
                                        <option value="<?= $data['id_kategori']; ?>"><?= $data['kategori']; ?></option>
                                    <?php
                                    endwhile;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="gambar" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Harga" name="harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Stok</label>
                                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Jumlah stok" name="stok" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>