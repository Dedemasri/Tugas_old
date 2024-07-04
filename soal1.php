<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <title>Masukan data </title>
<body>
    <h1>masukan identitas anda <h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <pre>
            Isikan nim : <input type="text" name="nim">
            Isikan nama     : <input type="text" name="nama">
            Isikan jenis kelamin  : <input type="text" name="jeniskelamin">
            Masukan tempat lahir : <input type="text" name="tempatlahir">
            Masukkan tanggal lahir : <input type="text" name="tanggallahir">
            Masukan jurusan : <input type="text" name="jurusan">
            <input type="submit" value="TAMPIL"> <input type="reset" value="BATAL">
        </pre>
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = isset($_POST['nama']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $jeniskelamin = isset($_POST['jeniskelamin']) ? $_POST['jeniskelamin'] : '';
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jurusan = $_POST["jurusan"];
    if (!empty($nim)) {
        echo "Nim        : $nim<br>";
    }
    if (!empty($nama)) {
        echo "Nama        : $nama<br>";
    }
    if (!empty($jeniskelamin)) {
        echo "Jeniskelamin      : $jeniskelamin<br>";
    }
    if (!empty($alamat)) {
        echo "Alamat        : $alamat<br>";
    }
    if (!empty($tempatlahir)) {
        echo "Tempatlahir        : $tempatlahir<br>";
    }
    if (!empty($tanggallahir)) {
        echo "Tanggallahir        : $tanggallahir<br>";
    }
    if (!empty($jurusan)) {
        echo "Jurusan        : $jurusan<br>";
    }
}
?>
</body>
</html>