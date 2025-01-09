<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Arahkan ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reog Ponorogo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    // Header atau navbar
    ?>
    <header>
        <nav>
            <div class="logo">
                <a href="#">Reog Ponorogo</a>
            </div>
            <div class="navbar-menu">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="artikel.php">Artikel</a></li>
                    <li><a href="jurnal.php">Jurnal</a></li>
                    <li><a href="tentang_kami.php">Tentang Kami</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    
                    <!-- Tambahan tautan ke halaman jurnal -->
                </ul>
            </div>
        </nav>
    </header>

    <?php
    // Bagian konten utama
    ?>
    <section class="beranda">
        <div class="judul" id="judul">
            <h1>REOG PONOROGO</h1>
            <h2><a href="artikel.php">Baca Artikel</a></h2>
        </div>
    </section>

</body>
</html>
