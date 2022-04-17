<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
$_SESSION['loggedin'] = false;
header("Location:login.php");
?>