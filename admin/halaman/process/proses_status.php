<?php
require '../../../configdb/config_db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['id']) {
    $id = $_GET['id'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_pesanan SET status = '$status' WHERE id_order = '$id'";
    $query = mysqli_query($connectDB, $sql);

    header('Location: ../../index.php?hal=data_pesanan');
    exit;
}
