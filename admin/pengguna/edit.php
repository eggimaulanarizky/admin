<?php
include '../../config/koneksi.php';
include '../../components/admin/header.php';
include '../../components/admin/sidebar.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<div class="content">
<div class="card">

<h2>EDIT PENGGUNA</h2>

<form action="update.php" method="POST" class="form">

    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    <input type="text" name="nama" value="<?= $d['nama'] ?>">
    <input type="text" name="username" value="<?= $d['username'] ?>">
    <input type="text" name="password" value="<?= $d['password'] ?>">

    <select name="role">
        <option value="admin" <?= $d['role']=='admin'?'selected':'' ?>>Admin</option>
        <option value="user" <?= $d['role']=='user'?'selected':'' ?>>User</option>
    </select>

    <br><br>
    <button class="btn btn-primary">Update</button>

</form>

</div>
</div>

<?php include '../../components/admin/footer.php'; ?>