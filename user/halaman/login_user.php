<div class="row">
    <div class="col-5">
        <h1 class="mb-4">Login User</h1>
        <form action="user/config_user/proses_login.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlPass" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlPass" placeholder="Password" name="password" required>
            </div>
            <p>Belum Punya Akun? <a href="index.php?hal=regisuser">Daftar disini</a></p>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>
</div>