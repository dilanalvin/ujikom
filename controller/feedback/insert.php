<?php
// Mulai sesi dan koneksi ke database
include("../koneksi.php"); // Ganti dengan path yang sesuai ke file koneksi Anda

// Ambil data dari form
$nama = $_POST['name'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$feedback = $_POST['feedback'];

// Validasi data (pastikan tidak kosong)
if (empty($nama) || empty($email) || empty($telp) || empty($alamat) ||empty($feedback)) {
    echo "Semua field harus diisi!";
    exit();
}


// Query untuk menyimpan data ke database
$sql = "INSERT INTO feedback (nama, email, telp,alamat,feedback) VALUES (?, ?, ?,?,?)";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("sssss", $nama, $email, $telp,$alamat,$feedback);

if ($stmt->execute()) {
    header("Location: ../../view/home_view.php"); 
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>
