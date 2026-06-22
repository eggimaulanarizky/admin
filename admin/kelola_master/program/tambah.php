<?php
include '../../../config/auth_admin.php';
include '../../../components/admin/header.php';
include '../../../components/admin/sidebar.php';
?>

<div class="content kelola-master-page">
    <div class="master-container">

        <div class="master-header">
            <h2>KELOLA MASTER</h2>
        </div>

        <div class="master-top">
            <a href="index.php" class="btn-main">Kembali</a>
        </div>

        <form action="simpan.php" method="POST">

            <label>Kode Program</label>
            <input type="text" name="kode_program" required>

            <label>Uraian Program</label>
            <input type="text" name="uraian_program" required>

            <br><br>

            <button type="submit" class="btn-main">
                SIMPAN
            </button>

        </form>

    </div>
</div>

<?php include '../../../components/admin/footer.php'; ?>