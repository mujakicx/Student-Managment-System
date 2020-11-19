<?php


if (isset($_POST['submit'])) {
    require_once 'dbh.inc.php';

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    require_once 'functions.inc.php';

    if (emptyInputLogin($username,$password) !== false) {
        header("Location: ../login.php?error=emptyinput");
        exit();
    } else {
        loginAdmin($conn,$username,$password);
    }



} else {
    header("Location: ../login.php");
    exit();
}