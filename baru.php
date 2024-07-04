<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</link><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> 
<body>
    <center>
    <br>
    <br>
    <form action="tes.php" method="get">
<table border='1'>
    <tr>
       
        <td><input type="text" class="from-control" required name="nama" placeholder ="masukan nama anda"></td>
    </tr>
    <tr>
        <td><input type="number" class="from-control" name="nim" placeholder ="masukan nim anda"></td>
    </tr>
    <tr>
        <td><input type="date" class="from-control" name="ttl" placeholder ="masukan ttl anda"></td>
    </tr>
    <td>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
    </td>
    <tr>
        <td><button type="submit" name="kirim" class="btn btn-success">proses</button></td>
</tr>
</table>
</form>
</center>
</body>
</html>