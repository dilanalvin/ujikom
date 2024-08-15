<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../../vendor/autoload.php'; // Pastikan untuk memuat autoloader Composer

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // Mulai sesi dan koneksi ke database
include("../koneksi.php"); // Ganti dengan path yang sesuai ke file koneksi Anda


// Query untuk mengambil data
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

// Mengecek jika query berhasil
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Buat instance spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan header kolom
$headers = ['Nama', 'Email', 'No. HP', 'Alamat', 'Ulasan'];
foreach ($headers as $colIndex => $header) {
    $sheet->setCellValueByColumnAndRow($colIndex + 1, 1, $header);
}

// Menambahkan data dari database
$rowIndex = 2;
while ($row = $result->fetch_assoc()) {
    $sheet->setCellValueByColumnAndRow(1, $rowIndex, $row['nama']);
    $sheet->setCellValueByColumnAndRow(2, $rowIndex, $row['email']);
    $sheet->setCellValueByColumnAndRow(3, $rowIndex, $row['telp']);
    $sheet->setCellValueByColumnAndRow(4, $rowIndex, $row['alamat']);
    $sheet->setCellValueByColumnAndRow(5, $rowIndex, $row['feedback']);
    $rowIndex++;
}

// Simpan file Excel
$writer = new Xlsx($spreadsheet);
$filename = 'feedback_data.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit();

?>