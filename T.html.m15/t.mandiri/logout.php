<?php

session_start();
unset ($_SESSION['namauser']);
header("Location: login.php");

?>