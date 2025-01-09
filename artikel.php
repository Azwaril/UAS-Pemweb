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
    <title>Artikel - Reog Ponorogo</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="css/artikel.css">
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

    <?php
    // Konten artikel
    ?>
    <section>
        <div class="artikel">
            <div class="artikel-reog pengertian">
                <h1>PENGERTIAN</h1>
                <p>Reog adalah tarian tradisional di arena terbuka yang berfungsi sebagai hiburan rakyat dan mengandung unsur magis. Penari utamanya merupakan orang berkepala singa dengan hiasan bulu merak, ditambah beberapa penari bertopeng dan berkuda lumping, disertai reog asli Indonesia. Reog merupakan salah satu seni budaya dari Jawa Timur bagian barat-laut, dan Ponorogo dianggap sebagai kota asalnya.</p>
            </div>
            <div class="artikel-reog asal">
                <h1>ASAL</h1>
                <p>Sesuai namanya, Reog Ponorogo merupakan kebudayaan asal Ponorogo, Jawa Timur. Reog Ponorogo adalah seni tradisional yang dikenal masyarakat Ponorogo sebagai Barongan. Tarian ini menampilkan sosok topeng macan berhias bulu merak berukuran sangat besar. Topeng tersebut dikenakan penari dengan gerakan meliuk-liuk. Pertunjukan Reog Ponorogo sering ditampilkan di berbagai acara, seperti pernikahan, perayaan hari jadi, hingga festival kesenian.</p>
            </div>
            <div class="artikel-reog sejarah">
                <h1>SEJARAH</h1>
                <P>Reog Ponorogo berawal dari Kelana Suwandana, raja Kerajaan Bantarangin, yang ingin melamar putri Kerajaan Kediri. Nama putri tersebut adalah Dewi Ragil Kuning atau Putri Sanggalangit. Ketika melakukan perjalanan untuk melamar sang putri, sang raja dicegah oleh Raja Kediri bernama Singa Barong. Kehadiran Raja Kediri ini disertai pasukan tentara yang terdiri dari hewan singa dan burung merak. Sementara, Raja Kelana bepergian bersama wakilnya, Bujang Anom dan pengawal raja yang disebut warok. Para pengawal raja ini memiliki kekuatan ilmu hitam yang mampu mematikan lawan. Para warok memakai celana dan baju hitam sambil membawa senjata cemeti dan pecut. Kedua kubu kerajaan kemudian saling bertarung mengeluarkan kesaktian. Selama berhari-hari pertarungan, keduanya saling berdamai. Akhirnya Raja Kelana berhasil meminang Dewi Ragil Kuning. Perang yang terjadi antara merak dan singa melawan warok ini kemudian menjadi pertunjukan seni. Bisa dikatakan, Reog Ponorogo menceritakan perang antara Kerajaan Kediri dan Kerajaan Bantarangin.</P>
            </div>
            <div class="artikel-reog tokoh">
                <h1>TOKOH DALAM REOG PONOROGO</h1>
                <div class="slide-container">
                    <div class="slide">
                        <img src="img/warok1.jpg" alt="Gambar 1">
                        <p>Warok adalah Tokoh pria yang dianggap sebagai pahlawan atau ksatria dalam Tari Reog. Warok memiliki peran penting dalam menghadapi tantangan atau pertarungan dalam cerita pertunjukan.</p>
                    </div>
                    <div class="slide">
                        <img src="img/bujang_ganong.jpg" alt="Gambar 2">
                        <p>Bujang Ganong adalah Patih muda yang energik, kocak, dan memiliki keahlian seni bela diri. Bujang Ganong digambarkan sebagai sosok yang cekatan, berkemauan keras, cerdik, jenaka, dan sakti.</p>
                    </div>
                    <div class="slide">
                        <img src="img/dadak_merak.jpg" alt="Gambar 3">
                        <p>Dadak Merak adalah Penari yang mengenakan topeng merak dan membawa alat musik tradisional seperti kendang dan gong.</p>
                    </div>
                    <div class="slide">
                        <img src="img/kelana_sewandana.jpg" alt="Gambar 4">
                        <p>Kelana Sewandana adalah Raja Bantarangin yang ingin melamar Dewi Ragil Kuning.</p>
                    </div>
                    <div class="slide">
                        <img src="img/jathil.jpg" alt="Gambar 5">
                        <p>Jathil adalah Penari yang bertugas untuk mengiringi musik dan menambah semarak pertunjukan.</p>
                    </div>
                    
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
            <div class="artikel-reog teknik">
                <h1>TEKNIK MENDASAR BERMAIN REOG</h1>
                <ol>
                    <li>Songgo Pundak, biasanya pemain Reog menitikberatkan di bagian gigi dan kepala nah kita alihkan titik beratnya di bagian pundak kita</li>
                    <li>Songgo Tangan merupakan teknik dengan menitikberatkan berat Reog pada bagian kedua tangan, gigi dan kepala</li>
                    <li>Songgo Wojo, adalah teknik pengalihan tumpuhan berat Reog saat menari pada gigi dan kepala. </li>
                    <li>Pastikan badan tetap seimbang dan sedikit merundukkan badan dengan menitikberatkan pada bagian tubuh belakang, serta dengan kuda-kuda kaki yang kuat.</li>
                    <li>Jika bergerak maka bebannya akan lebih berat. Maka dari itu, pemain harus berlatih dengan sungguh-sungguh sebelum mencoba.</li>
                    <li>Sebagai tambahan saat latihan, Anda harus bisa mengangkat sebuah barbel mini buatan sendiri dengan hanya menggunakan gigi dan sering melakukan hand stand sambil menggigit bambu agar memperkuat daya gigit Anda terhadap kepala singo barong Reog.</li>
                    <li>Kuncinya harus yakin jika bisa melakukan tarian Reog, karena tanpa rasa yakin, mungkin bisa mematahkan leher.</li>
                    
                </ol>
            </div>
        </div>
    </section>

    <!-- Link ke file JavaScript -->
    <script src="js/artikel.js"></script>
</body>
</html>
