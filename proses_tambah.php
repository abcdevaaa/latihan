<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$harga = $_GET['harga'];

$sql = "INSERT INTO novel(judul, pengarang, harga) VALUES ('$judul','$pengarang','$harga')";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header("location:index.php?simpan=sukses");
    exit;
} else {
    header("location:index.php?simpan=gagal");
    exit;
}

?>