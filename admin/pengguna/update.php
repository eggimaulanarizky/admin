<?php
include '../../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

mysqli_query($conn, "
    UPDATE users SET
    nama='$nama',
    username='$username',
    password='$password',
    role='$role'
    WHERE id='$id'
");

header("Location: index.php");