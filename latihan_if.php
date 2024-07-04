<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Nilai Mahasiswa</title>
    <!-- Memuat Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-3">Form Input Nilai Mahasiswa</h1>
    <form action="hasil_if.php" method="post" class="needs-validation" novalidate>
    
        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Nama gedung:</label>
            <select class="form-select" id="mata_kuliah" name="mata_kuliah">
                <option value="Dasar Pemrograman">gedung 1</option>
                <option value="Database">gedung 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Nama lantai:</label>
            <select class="form-select" id="mata_kuliah" name="mata_kuliah">

                <option value="Dasar Pemrograman">lantai 1</option>
                <option value="Database">lantai 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kode_ruang" class="form-label">Kode ruang:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="nama_ruang" class="form-label">Nama ruang:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="Kapasitas" class="form-label">Kapasitas:</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>