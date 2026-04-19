<?php
session_start();

$namaUser = $_POST['username'];
$password = $_POST['password'];

if ('login sukses')
    {
        $_SESSION['username'] = $namaUser;

        echo "<p>Selamat datang <b>" . $_SESSION['username'] . "</b></p>";
        echo "<p>Berikut ini menu navigasi Anda</p>";
        echo "<p><a href='hall.php'>Menu 1</a><br>";
        echo "<a href='hal2.php'>Menu 2</a><br>";
        echo "<a href='hal3.php'>Menu 3</a></p>";
    }
?>