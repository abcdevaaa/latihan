<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "123456") {
    $_SESSION['username'] = "Administrator";
    header("location:index.php?login=sukses");
    exit;
} else {
    header("location:login.php?login=gagal");
    exit;
}

?>