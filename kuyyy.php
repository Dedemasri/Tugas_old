<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $suplayer = $_POST["suplayer"];
  $barang = $_POST["barang"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $note = $_POST["note"];

  echo "Terima kasih, $nim<br>";
  echo "Barang: $barang<br>";
  echo "Suplayer: $suplayer<br>";
  echo "Jenis Kelamin: $jenis_kelamin<br>";
  echo "Note: $note<br>";
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <!-- Isi form -->
  <label for="nim">NIM:</label>
  <input type="text" id="nim" name="nim"><br><br>
  
  <label for="tanggal_lahir">Tanggal Lahir:</label>
  <input type="text" id="tanggal_lahir" name="tanggal_lahir"><br><br>
  
  <label for="suplayer">Suplayer:</label>
  <input type="text" id="suplayer" name="suplayer"><br><br>
  
  <label for="barang">Barang:</label>
  <input type="text" id="barang" name="barang"><br><br>
  
  <label for="jenis_kelamin">Jenis Kelamin:</label>
  <input type="text" id="jenis_kelamin" name="jenis_kelamin"><br><br>
  
  <label for="note">Note:</label>
  <textarea id="note" name="note"></textarea><br><br>
  
  <input type="submit" value="Submit">
</form>
