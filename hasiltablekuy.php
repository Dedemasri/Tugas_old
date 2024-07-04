<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="tablekuy">
    <h1>Hasil Input Nilai Mahasiswa</h1>
    <?php
    if (isset($_POST['nama'], $_POST['nim'], $_POST['kelas'], $_POST['mata_kuliah'], $_POST['nilai'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai = $_POST['nilai'];
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $absen = $_POST['absen'];

        $grade = '';

        // Menghitung total nilai
        $hasil = ($nilai1 * 0.15) + ($nilai2 * 0.15) + ($uts * 0.20) + ($uas * 0.30) + ($absen * 0.20);

        // Menentukan grade berdasarkan total nilai
        if ($hasil >= 0 && $hasil < 50) {
            $grade = "E";
        } elseif ($hasil >= 50 && $hasil < 60) {
            $grade = "D";
        } elseif ($hasil >= 60 && $hasil < 75) {
            $grade = "C";
        } elseif ($hasil >= 75 && $hasil < 85) {
            $grade = "B";
        } elseif ($hasil >= 85 && $hasil <= 100) {
            $grade = "A";
        } else {
            $grade = "Nilai Anda di luar jangkauan";
        }

        // Menampilkan hasil
        echo "<div class='alert alert-success' role='alert'>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Kelas: $kelas<br>";
        echo "Mata Kuliah: $mata_kuliah<br>";
        echo "Nilai: $hasil, dikonversi menjadi Grade: $grade";
        echo "</div>";
    } else {
        // Menampilkan pesan jika form belum diisi
        echo "<div class='alert alert-warning' role='alert'>";
        echo "Silakan isi form dan submit data.";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
