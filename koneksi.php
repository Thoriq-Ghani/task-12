<?php
$servername = "localhost";  // Server yang digunakan, biasanya "localhost" atau "127.0.0.1"
$username = "root";         // Username untuk koneksi ke MySQL, default di XAMPP adalah "root"
$password = "";             // Password untuk koneksi ke MySQL, default di XAMPP adalah kosong (empty)
$dbname = "dbdiriya";       // Nama database yang akan digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>
