<div class="row justify-content-center">
    <div class="col-5 py-4">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center h2 mb-2">Login User</h1>
                <div class="mb-3 text-center text-secondary">Masuk sebagai pengguna</div>

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

                <form action="user/config_user/proses_login.php" method="post" class="border-top">
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username" name="username" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlPass" placeholder="Masukkan Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Masuk</button>
                    <div class="text-center border-top pt-2">Belum Punya Akun? <a href="index.php?hal=regisuser">Daftar disini</a></div>
                </form>
            </div>
        </div>
    </div>
</div>