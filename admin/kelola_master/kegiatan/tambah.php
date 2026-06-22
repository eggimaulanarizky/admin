<?php
include '../../../config/auth_admin.php';
include '../../../config/koneksi.php';
include '../../../components/admin/header.php';
include '../../../components/admin/sidebar.php';

$program = mysqli_query($conn,"SELECT * FROM program");
?>

<div class="content kelola-master-page">
    <div class="master-container">

        <div class="master-header">
            <h2>TAMBAH KEGIATAN</h2>
        </div>

        <div class="master-top">
            <a href="index.php" class="btn-back">Kembali</a>
        </div>

        <form action="simpan.php" method="POST" class="form">

            <label>Pilih Program</label>
            <select name="id_program" required>
                <option value="">Pilih Program</option>

                <?php while($p=mysqli_fetch_assoc($program)) { ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['kode']; ?> - <?= $p['uraian']; ?>
                </option>
                <?php } ?>
            </select>

            <label>Kode Kegiatan</label>
            <input type="text" name="kode_kegiatan" required>

            <label>Uraian Kegiatan</label>
            <input type="text" name="uraian_kegiatan" required>

            <button type="submit" class="btn-main">
                SIMPAN
            </button>

        </form>

    </div>
</div>

<?php include '../../../components/admin/footer.php'; ?>