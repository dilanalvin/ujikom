<?php

include("../koneksi.php"); // Ganti dengan path yang sesuai ke file koneksi Anda

header('Content-Type: application/json'); // Mengatur header agar output berupa JSON

// Ambil data dari tabel mahasiswa
$sql = "SELECT * FROM feedback"; // Ganti 'mahasiswa' dengan nama tabel Anda
$result = $conn->query($sql);

$data = array(); // Array untuk menyimpan data mahasiswa

// Cek apakah ada data
if ($result->num_rows > 0) {
    // Output data setiap baris
    while($row = $result->fetch_assoc()) {
        $data[] = $row; // Menyimpan data ke array
    }
} else {
    $data = array(); // Tidak ada data
}

// Mengeluarkan data dalam format JSON
echo json_encode($data);

// Tutup koneksi
$conn->close();
?>
