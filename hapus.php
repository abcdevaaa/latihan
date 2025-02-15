<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$no = $_GET['no'];

$sql = "DELETE FROM novel WHERE no = '$no'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("location:index.php?hapus=sukses");
    exit;
} else {
    header("location:index.php?hapus=gagal");
    exit;
}
?>