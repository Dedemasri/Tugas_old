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
    <h1>Masukan identitas anda</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <pre>
            Isikan nama     : <input type="text" name="nama">
            Isikan no telp  : <input type="text" name="notelp">
            Masukan alamat  : <textarea name="alamat" rows="5" cols="40"></textarea>
            <input type="submit" value="TAMPIL"> <input type="reset" value="BATAL">
        </pre>
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $telp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

    if (!empty($nama)) {
        echo "Nama        : $nama<br>";
    }
    if (!empty($telp)) {
        echo "No telp     : $telp<br>";
    }
    if (!empty($alamat)) {
        echo "Alamat      : $alamat<br>";
    }
}
?>
</body>
</html>