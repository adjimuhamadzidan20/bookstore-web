<div class="row justify-content-center">
    <div class="col-6 py-4">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center h2 mb-2">Register User</h1>
                <div class="mb-3 text-center text-secondary">Daftar sebagai pengguna</div>
                <form action="user/config_user/proses_regis.php" method="post" class="border-top">
                    <div class="row mt-3">
                        <div class="col">
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
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlPass" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                                    <option value="" selected>-- Jenis Kelamin --</option>
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
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Alamat" name="alamat" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb">Daftar</button>
                    <div class="text-center border-top pt-2">Sudah Punya Akun? <a href="index.php?hal=loginuser">Masuk disini</a></div>
                </form>
            </div>
        </div>

    </div>
</div>