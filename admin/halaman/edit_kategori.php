<?php

$id = $_GET['id'];

$sql = "SELECT * FROM tb_kategori WHERE id_kategori = '$id'";
$query = mysqli_query($connectDB, $sql);
$data = mysqli_fetch_assoc($query);

?>

<div class="row">
    <div class="col-5">
        <h1 class="mb-4 h2">Edit Kategori</h1>
        <div class="card">
            <div class="card-body">
                <form action="halaman/process/proses_edit.php?proses=edit_kategori&id=<?= $data['id_kategori']; ?>" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['kategori']; ?>" name="kategori" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>