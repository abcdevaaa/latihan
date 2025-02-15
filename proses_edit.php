<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$no = $_GET['no'];
$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$harga = $_GET['harga'];

$sql = "UPDATE novel SET judul='$judul', pengarang='$pengarang', harga='$harga' WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:index.php?edit=sukses");
    exit;
} else {
    header("location:index.php?edit=gagal");
    exit;
}
?>