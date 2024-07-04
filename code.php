<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/submit_form" method="post" enctype="multipart/form-data">
        <!-- Isi formulir di sini -->
<form>
        <input type="radio" name="nama_variabel" value="op1"> Pilihan 1<br>
        <input type="radio" name="nama_variabel" value="op2"> Pilihan 2<br>
        <input type="radio" name="nama_variabel" value="op3"> Pilihan 3<br>
    </form>
        <!-- Penggunaan input checkbox -->
        <input type="checkbox" name="nama_kamu" value="ON" checked> Pilihan 1,<br>
        <input type="checkbox" name="nama_kamu" value="ON" checked> Pilihan 2,<br>
    </form>
    <form>
        <!-- Penggunaan dropdown -->
        <select name="nama_variabel">
            <option>Combo1</option>
            <option>Combo2</option>
        </select>
    </form>
    <input type="text" name="nama_variabel" name="value">
</form>
<textarea rows="4" cols="50" name="nama_variabel"></textarea>
</form>
</body>
</html>