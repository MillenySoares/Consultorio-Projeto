<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    if(!isset($_SESSION['logedIn']) || !$_SESSION['logedIn']) header("Location: ../controllers/login.php");
?>