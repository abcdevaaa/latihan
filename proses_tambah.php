<?php
include "koneksi.php";

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$sql = "INSERT INTO buku (judul, pengarang, penerbit, harga) 
VALUES ('$judul','$pengarang','$penerbit','$harga')";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("location:index.php?simpan=sukses");
} else {
    header("location:index.php?simpan=gagal");
}

?>