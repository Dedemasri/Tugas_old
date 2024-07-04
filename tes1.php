<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>
<form action="kuyy.php" method="post">
  <h2>Tambahan Data Ruang</h2>
  Nama Gedung:
  <select name="nama_gedung">
    <option value="-Pilih-">-Pilih-</option>
    <option value="gedung A">Gedung A</option>
    <option value="gedung B">Gedung B</option>
    <option value="gedung C">Gedung C</option>
    <option value="Lain-lain">Lain-lain</option>
  </select>
  <br>
  Nama Lantai:
  <select name="lantai">
    <option value="lantai 1">Lantai 1</option>
    <option value="lantai 2">Lantai 2</option>
    <option value="lantai 3">Lantai 3</option>
  </select>
  <br>
  <label for="nama_ruang">Nama Ruang:</label><br>
  <input type="text" name="nama_ruang" required><br>
  <label for="kode_ruang">Kode Ruang:</label><br>
  <input type="text" name="kode_ruang" required><br>
  <label for="kapasitas">Kapasitas:</label><br>
  <input type="text" name="kapasitas" required><br>
  <label for="deskripsi_ruang">Deskripsi Ruang:</label><br>
  <textarea rows="4" name="deskripsi_ruang" required></textarea><br>
  <br>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
</form>
</body>
</html>
