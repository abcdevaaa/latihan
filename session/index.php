<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Selamat datang " . $_SESSION['username'];
    echo "<br><br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "Anda belum login";
    echo "<br><br>";
    echo "<a href='login.php'>Login</a>";
}

?>