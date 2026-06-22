<?php
include '../../../config/auth_admin.php';
include '../../../config/koneksi.php';
include '../../../components/admin/header.php';
include '../../../components/admin/sidebar.php';

$output = mysqli_query($conn,"
SELECT output.*, 
       output.uraian AS uraian_output,
       kegiatan.kode AS kode_kegiatan,
       kegiatan.uraian AS uraian_kegiatan,
       program.kode AS kode_program,
       program.uraian AS uraian_program
FROM output
JOIN kegiatan ON output.id_kegiatan = kegiatan.id
JOIN program ON kegiatan.id_program = program.id
");
?>

<div class="content kelola-master-page">
<div class="master-container">

    <!-- HEADER -->
    <div class="master-header">
        <h2>TAMBAH SUB OUTPUT</h2>

        <div class="user-box">
            <?= $_SESSION['nama']; ?>
        </div>
    </div>

    <!-- BUTTON KEMBALI -->
    <div class="master-top">
        <a href="index.php" class="btn-back">Kembali</a>
    </div>

    <!-- FORM -->
    <form action="simpan.php" method="POST" class="form">

        <!-- PILIH OUTPUT -->
        <label>Pilih Output</label>
        <select name="id_output" id="pilihOutput" required>
            <option value="">Pilih Output</option>

            <?php while($o=mysqli_fetch_assoc($output)) { ?>
            <option
                value="<?= $o['id']; ?>"
                data-program-kode="<?= $o['kode_program']; ?>"
                data-program-uraian="<?= $o['uraian_program']; ?>"
                data-kegiatan-kode="<?= $o['kode_kegiatan']; ?>"
                data-kegiatan-uraian="<?= $o['uraian_kegiatan']; ?>"
                data-output-kode="<?= $o['kode']; ?>"
                data-output-uraian="<?= $o['uraian_output']; ?>">
                <?= $o['kode']; ?> - <?= $o['uraian_output']; ?>
            </option>
            <?php } ?>
        </select>

        <br><br>

        <!-- PROGRAM -->
        <div class="row-master">
            <label>Program</label>
            <input type="text" id="program_kode" class="kode-box" readonly>
        </div>

        <!-- KEGIATAN -->
        <div class="row-master">
            <label>Kegiatan</label>
            <input type="text" id="kegiatan_kode" class="kode-box" readonly>
        </div>

        <!-- OUTPUT -->
        <div class="row-master">
            <label>Output</label>
            <input type="text" id="output_kode" class="kode-box" readonly>
         
        </div>

        <br>

        <h3>Tambah Sub Output</h3>

        <!-- KODE SUB OUTPUT -->
        <div class="row-master">
            <label>Kode Sub Output</label>
            <input type="text" name="kode_sub_output" class="kode-box" required>
        </div>

        <!-- URAIAN SUB OUTPUT -->
        <div class="row-master">
            <label>Uraian Sub Output</label>
            <input type="text" name="uraian_sub_output" class="uraian-box" required>
        </div>

        <!-- BUTTON SIMPAN -->
        <button type="submit" class="btn-main">
            SIMPAN
        </button>

    </form>

</div>
</div>

<script>
document.getElementById('pilihOutput').addEventListener('change', function () {
    let selected = this.options[this.selectedIndex];

    document.getElementById('program_kode').value =
        selected.getAttribute('data-program-kode');

    document.getElementById('program_uraian').value =
        selected.getAttribute('data-program-uraian');

    document.getElementById('kegiatan_kode').value =
        selected.getAttribute('data-kegiatan-kode');

    document.getElementById('kegiatan_uraian').value =
        selected.getAttribute('data-kegiatan-uraian');

    document.getElementById('output_kode').value =
        selected.getAttribute('data-output-kode');

    document.getElementById('output_uraian').value =
        selected.getAttribute('data-output-uraian');
});
</script>

<?php include '../../../components/admin/footer.php'; ?>