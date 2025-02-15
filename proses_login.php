<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password = md5('$password')";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query) == 1){
    $_SESSION['username'] = $username;
    header("location:index.php?login=sukses");
    exit;
} else {
    header("location:login.php?login=sukses");
    exit;
}
?>