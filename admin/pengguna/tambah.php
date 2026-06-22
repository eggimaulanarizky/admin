<?php
include '../../config/koneksi.php';
include '../../components/admin/header.php';
include '../../components/admin/sidebar.php';
?>

<div class="content">

<div class="card">

    <div class="card-header">
        <h2>TAMBAH PENGGUNA</h2>
    </div>

    <br>

    <form action="simpan.php" method="POST" class="form">

        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">

        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <br><br>

        <button class="btn btn-primary">Simpan</button>

    </form>

</div>

</div>

<?php include '../../components/admin/footer.php'; ?>