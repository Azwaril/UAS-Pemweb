<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Arahkan ke halaman login
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tentang Kami - Reog Ponorogo</title>
    <link rel="stylesheet" href="<?php echo 'css/tentang_kami.css'; ?>">
</head>
<body>
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
                </ul>
            </div>
        </nav>
    </header>

    <section class="about-section">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p>Selamat datang di situs resmi <strong>Reog Ponorogo</strong>, sumber informasi terpercaya tentang kesenian tradisional Reog yang berasal dari Ponorogo, Jawa Timur. Kami berdedikasi untuk melestarikan dan mempromosikan salah satu warisan budaya Indonesia yang paling megah dan penuh makna.</p>
            <p>Kami berkomitmen untuk memberikan wawasan yang mendalam tentang sejarah, filosofi, dan perkembangan kesenian Reog. Situs website ini dibuat untuk membagikan keindahan tradisi Reog kepada dunia, dengan harapan generasi mendatang tetap dapat menikmati dan memelihara budaya ini.</p>
            
            <h2>Misi Kami</h2>
            <p>Misi kami adalah untuk melestarikan Reog Ponorogo sebagai salah satu kekayaan budaya Indonesia, serta menyebarkan pemahaman akan nilai-nilai luhur yang terkandung dalam setiap tarian, musik, dan pertunjukan Reog.</p>
            
            <h2>Tim Kami</h2>
            <div class="team">
                <div class="team-member">
                    <img src="<?php echo 'img/faza.jpg'; ?>" alt="Tim 1">
                    <h3>Faza Muzakki</h3>
                    <p>23091397084</p>
                </div>
                <div class="team-member">
                    <img src="<?php echo 'img/diah.jpg'; ?>" alt="Tim 2">
                    <h3>Diah Arum Cahyaningtyas</h3>
                    <p>23091397089</p>
                </div>
                <div class="team-member">
                    <img src="<?php echo 'img/aril.jpg'; ?>" alt="Tim 3">
                    <h3>Mohammad Azwaril Hasibi</h3>
                    <p>23091397090</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
