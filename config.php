<?php
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = "tkjtkj"; // Sesuaikan dengan password database Anda
$dbname = "31_assessment"; // Nama database

// Membuat koneksi
$con = mysqli_connect($servername, $username, $password, $dbname); // Gunakan $con agar konsisten dengan yang lain

// Cek koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
