<?php
// Hubungkan ke database
include 'koneksi.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal - Reog Ponorogo</title>
    <link rel="stylesheet" href="css/jurnal.css">
</head>
<body>
    <?php
    // Bagian header atau navigasi
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
                </ul>
            </div>
        </nav>
    </header>
    <section>
    <h1>Daftar Jurnal</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Abstrak</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Link PDF</th>
        </tr>
        <?php
        $query = "SELECT * FROM jurnal";
        $result = mysqli_query($conn, $query);
        $no = 1;

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . substr($row['abstrak'], 0, 100) . "...</td>"; // Potong abstrak
            echo "<td>" . $row['penulis'] . "</td>";
            echo "<td>" . $row['tahun_publikasi'] . "</td>";
            echo "<td><a href='" . $row['file_pdf'] . "' target='_blank'>Download</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    </section>
    <!-- Link ke file JavaScript -->
    <script src="js/artikel.js"></script>
</body>
</html>
