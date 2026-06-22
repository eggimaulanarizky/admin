<?php
include '../../../config/auth_admin.php';
include '../../../config/koneksi.php';
include '../../../components/admin/header.php';
include '../../../components/admin/sidebar.php';

$program = mysqli_query($conn,"SELECT * FROM program");
$kegiatan = mysqli_query($conn,"SELECT * FROM kegiatan");
?>

<div class="content kelola-master-page">
<div class="master-container">

<h2>TAMBAH OUTPUT</h2>

<form action="simpan.php" method="POST" class="form">

<label>Pilih Program</label>
<select disabled>
<?php while($p=mysqli_fetch_assoc($program)) { ?>
<option><?= $p['kode']; ?> - <?= $p['uraian']; ?></option>
<?php } ?>
</select>

<label>Pilih Kegiatan</label>
<select name="id_kegiatan" required>
<option value="">Pilih Kegiatan</option>

<?php while($k=mysqli_fetch_assoc($kegiatan)) { ?>
<option value="<?= $k['id']; ?>">
    <?= $k['kode']; ?> - <?= $k['uraian']; ?>
</option>
<?php } ?>
</select>

<label>Kode Output</label>
<input type="text" name="kode_output" required>

<label>Uraian Output</label>
<input type="text" name="uraian_output" required>

<button type="submit" class="btn-main">SIMPAN</button>

</form>

</div>
</div>

<?php include '../../../components/admin/footer.php'; ?>