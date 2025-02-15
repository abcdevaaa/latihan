<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$sql = "SELECT * FROM novel";
$query = mysqli_query($koneksi, $sql);  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novel</h1>
    <a href="tambah.php"><button>Tambah</button></a><br><br>

    <table border='1'>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while($novel = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?=$novel['no']?></td>
                <td><?=$novel['judul']?></td>
                <td><?=$novel['pengarang']?></td>
                <td><?=$novel['harga']?></td>
                <td>
                    <a href="edit.php?no=<?=$novel['no']?>">Edit</a>
                    <a href="hapus.php?no=<?=$novel['no']?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table><br>
    <a href='logout.php'><button>Logout</button></a>
</body>
</html>