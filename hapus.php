<?php
include "koneksi.php";
$id = $_GET['no'];
$sql = "DELETE FROM buku WHERE id = '$id' ";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?hapus=sukses");
} else {
    header("location:index.php?hapus=gagal");
}

?>