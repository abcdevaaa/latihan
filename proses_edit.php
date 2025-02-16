<?php
include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$sql = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit',
harga = '$harga' WHERE id = '$id' ";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?edit=sukses");
} else {
    header("location:index.php?edit=gagal");
}

?>