<?php
include "koneksi.php";

$id = $_GET['no'];
$sql = "SELECT * FROM buku WHERE id = '$id' ";
$query = mysqli_query($koneksi, $sql);

while($buku = mysqli_fetch_assoc($query)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>Edit Data</h1>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $buku['id']; ?>">
        <label>Judul</label>
        <input type="text" name="judul" value="<?php echo $buku['judul']; ?>"><br>
        <label>Pengarang</label>
        <input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>"><br>
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?php echo $buku['penerbit']; ?>"><br>
        <label>Harga</label>
        <input type="number" name="harga" value="<?php echo $buku['harga']; ?>"><br>
        <input type="submit" value="Simpan" name="Simpan">
    </form>

</body>
</html>


<?php
}
?>