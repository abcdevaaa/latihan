<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$no = $_GET['no'];
$sql = "SELECT * FROM novel WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

while ($novel=mysqli_fetch_assoc($query)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="proses_edit.php" method="get">
        <input type="hidden" name="no" value="<?=$novel['no']?>">

        <label for="">Judul</label><br>
        <input type="text" name="judul" id="" value="<?=$novel['judul']?>"><br>

        <label for="">Pengarang</label><br>
        <input type="text" name="pengarang" id="" value="<?=$novel['pengarang']?>"><br>

        <label for="">Harga</label><br>
        <input type="number" name="harga" id="" value="<?=$novel['harga']?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
<?php } ?>