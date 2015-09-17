<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['userpass']);
header("location:index.php");
?>