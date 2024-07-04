<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 20%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            width: 20%;
        }
        td {
            width: 70%; /* Menentukan lebar kolom untuk nilai */
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
// Periksa apakah data sudah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari setiap input
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $pendidikan = $_POST["pendidikan"];

    // Tampilkan hasil input dalam bentuk tabel
    echo "<h2>Informasi Pendaftar</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Nama</td><td>$nama</td></tr>";
    echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
    echo "<tr><td>Tempat Lahir</td><td>$tempat_lahir</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>$tanggal_lahir</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>";
    echo "<tr><td>Pendidikan</td><td>$pendidikan</td></tr>";
    echo "</table>";
} else {
    // Jika tidak ada data POST, tampilkan pesan
    echo "<p>Formulir belum diisi.</p>";
}
?>
</body>
</html>
