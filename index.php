<?php
include "koneksi.php";
$sql = "SELECT * FROM buku";
$query = mysqli_query($koneksi, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h1>Data Buku </h1>

    <a href="tambah.php"><button>Tambah</button></a><br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        while($buku = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $buku['id'] . "</td>";
            echo "<td>" . $buku['judul'] . "</td>";
            echo "<td>" . $buku['pengarang'] . "</td>";
            echo "<td>" . $buku['penerbit'] . "</td>";
            echo "<td>" . $buku['harga'] . "</td>";
            echo "<td>";
                echo "<a href='edit.php?no=". $buku['id'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='hapus.php?no=". $buku['id'] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>