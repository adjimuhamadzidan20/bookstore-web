<div class="row">
    <div class="col-5">
        <h1 class="mb-4 h2">Kontak kami</h1>

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

        <div class="card">
            <div class="card-body">
                <form action="user/config_user/proses_kontak.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukkan nama anda" name="nama_pengirim" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan pesan" name="pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>