//Nama: Farah Aulia Rahman
//NIM: 250102040
//Kelas: TI-2B

<?php
mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi Gagal: " . htmlspecialchars(mysqli_connect_error()));
} else {
    echo "Koneksi berhasil ke database db_perpustakaan";
}

mysqli_set_charset($koneksi, "utf8mb4");
?>