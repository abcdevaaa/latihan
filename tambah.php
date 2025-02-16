<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>Tambah Data</h1>

    <form action="proses_tambah.php" method="POST">
        <label>Judul</label>
        <input type="text" name="judul"><br>
        <label>Pengarang</label>
        <input type="text" name="pengarang"><br>
        <label>Penerbit</label>
        <input type="text" name="penerbit"><br>
        <label>Harga</label>
        <input type="number" name="harga"><br>
        <input type="submit" value="Simpan" name="Simpan">
    </form>

</body>
</html>