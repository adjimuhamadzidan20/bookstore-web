<?php
session_start();

if (isset($_SESSION['id_admin'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore | Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="index.php">Bookstore</a>
        </div>
    </nav>

    <main>
        <div class="container p-3">
            <div class="row">
                <div class="col-5">
                    <h1 class="mb-4">Login Admin</h1>
                    <form action="halaman/process/proses_login_admin.php" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlPass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlPass" placeholder="Password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                </div>
            </div>

        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>