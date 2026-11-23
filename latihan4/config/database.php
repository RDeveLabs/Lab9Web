<?php
// Koneksi dipindahkan dari koneksi.php Praktikum 8.
// Host, user, password, dan database dipertahankan seperti project asli.
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
}
?>
