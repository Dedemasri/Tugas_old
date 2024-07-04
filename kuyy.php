<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_gedung = $_POST["nama_gedung"];
  $lantai = $_POST["lantai"];
  $nama_ruang = $_POST["nama_ruang"];
  $kode_ruang = $_POST["kode_ruang"];
  $kapasitas = $_POST["kapasitas"];
  $deskripsi_ruang = $_POST["deskripsi_ruang"];

  echo "Nama Gedung: $nama_gedung<br>";
  echo "Lantai: $lantai<br>";
  echo "Nama Ruang: $nama_ruang<br>";
  echo "Kode Ruang: $kode_ruang<br>";
  echo "Kapasitas: $kapasitas<br>";
  echo "Deskripsi Ruang: $deskripsi_ruang<br>";
}
?>