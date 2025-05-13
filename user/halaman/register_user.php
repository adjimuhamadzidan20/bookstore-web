<div class="row mb-4">
    <div class="col-5">
        <h1 class="mb-4">Register User</h1>
        <form action="user/config_user/proses_regis.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlPass" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlPass" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlPass" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="Nama Lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlPass" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                    <option selected>-- Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlPass" class="form-label">No Telp</label>
                <input type="text" class="form-control" id="exampleFormControlPass" placeholder="No telepon" name="telp" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="alamat" required></textarea>
            </div>
            <p>Sudah Punya Akun? <a href="index.php?hal=loginuser">Masuk disini</a></p>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</div>