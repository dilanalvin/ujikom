<?php 

// Memulai sesi PHP, diperlukan untuk menyimpan data sesi seperti username
session_start(); 

// Memasukkan file koneksi ke database
include("koneksi.php"); 

// Mengambil nilai username dan password dari form login
$username = $_POST['username']; 
$password = $_POST['password']; 

// Menyusun query SQL untuk memeriksa kecocokan username dan password
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 

// Menjalankan query SQL
$result = $conn->query($sql); 

// Memeriksa apakah ada baris yang cocok (login berhasil)
if ($result->num_rows > 0) { 
    // Menyimpan username ke dalam sesi untuk penggunaan di halaman lain
    $_SESSION['username'] = $username; 

    // Mengalihkan pengguna ke halaman welcome.php setelah login berhasil
    header("Location: ../view/welcome.php"); 
} else { 
    // Menampilkan pesan jika login gagal dan memberikan link untuk mencoba login kembali
    echo "<center><p> Login gagal. <br><a href='../view/login.php'>Coba login kembali</a></p></center>"; 
} 

// Menutup koneksi ke database
$conn->close(); 

?>
