

<div class="sidebar" id="sidebar">

    <div class="sidebar-header">

        <div class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>

        <div class="logo-box">
            <img 
                src="assets/image/logo_konstanta.png" 
                alt="Logo"
                style="width:80px; height:80px; object-fit:cover; border-radius:8px;">

            <div class="logo-text">
                <h2>KONSTANTA</h2>
                <p>KONTRAK PETUGAS DAN BERITA ACARA</p>
            </div>
        </div>

        <hr>
    </div>

    <div class="menu">
        <a href="dashboard.php">
            <i class="fas fa-house"></i>
            <span>Dashboard</span>
        </a>

        <a href="kontrak.php">
            <i class="fas fa-handshake"></i>
            <span>Buat Kontrak</span>
        </a>

        <a href="bast.php">
            <i class="fas fa-clipboard"></i>
            <span>Buat BAST</span>
        </a>

        <a href="cetak.php">
            <i class="fas fa-print"></i>
            <span>Cetak</span>
        </a>
    </div>

    <div class="sidebar-logout">
        <a href="../logout.php">
            <i class="fas fa-right-from-bracket"></i>
            <span>Logout</span>
        </a>
    </div>

    <div class="sidebar-footer">
        <div class="footer-logo">
            <img src="https://www.lazone.id/storage/news/Oktober2023/12/SEO/BMTH5.jpg" alt="BPS">
        </div>
         <span>
        BADAN PUSAT STATISTIK
        <br>
        KOTA SUKABUMI
    </span>
       
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const content = document.querySelector(".content");

    if (localStorage.getItem("sidebarState") === "closed") {
        sidebar.classList.add("close");

        if(content){
            content.classList.add("expanded");
        }
    }
});

function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const content = document.querySelector(".content");

    sidebar.classList.toggle("close");

    if(content){
        content.classList.toggle("expanded");
    }

    localStorage.setItem(
        "sidebarState",
        sidebar.classList.contains("close") ? "closed" : "open"
    );
}
</script>