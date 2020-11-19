<?php
session_start();

if (!isset($_SESSION['loggedIn']) || !isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}