<?php
include '../../config/koneksi.php';
include '../../components/admin/header.php';
include '../../components/admin/sidebar.php';

$data = mysqli_query($conn, "SELECT * FROM users");
?>

<div class="content">

<div class="card">

    <div class="card-header">
        <h2>PENGGUNA</h2>

        <div>
            <span class="badge">Admin</span>
            <button class="btn btn-gray" onclick="history.back()">Kembali</button>
        </div>
    </div>

    <br>

    <a href="tambah.php" class="btn btn-primary">+ Tambah Pengguna</a>

    <br><br>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($d = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['username'] ?></td>
            <td><?= $d['role'] ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-primary">Edit</a>
                <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
             Hapus
   
</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</div>

<?php include '../../components/admin/footer.php'; ?>