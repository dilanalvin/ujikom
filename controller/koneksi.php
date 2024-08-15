<?php 

// Mendefinisikan parameter koneksi database
$host = "localhost";         // Alamat host database, biasanya 'localhost'
$username = "root";          // Nama pengguna database, default 'root'
$password = "";              // Kata sandi database, kosong jika tidak ada
$database = "ujikom_alvin";  // Nama database yang akan digunakan

// Membuat objek koneksi baru ke database menggunakan MySQLi
$conn = new mysqli($host, $username, $password, $database); 

// Memeriksa apakah koneksi ke database berhasil atau gagal
if ($conn->connect_error) { 
    // Jika terjadi kesalahan saat koneksi, tampilkan pesan kesalahan dan hentikan eksekusi script
    die("Koneksi ke database gagal: " . $conn->connect_error); 
} 

?>
