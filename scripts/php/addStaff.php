<?php
if (isset($_POST['submit'])) {
    include_once '../../includes/dbh.inc.php';

    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $adresa = $conn->real_escape_string($_POST['adresa']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $email = $conn->real_escape_string($_POST['email']);
    $tHashPW = strtolower($ime) . rand(100,1000);
    $password = password_hash($tHashPW, PASSWORD_BCRYPT);
    $titula = $conn->real_escape_string($_POST['titula']);

    require_once '../../includes/functions.inc.php';

    if (invalidEmail($email) !== false) {
        header("Location: '../../login.php?error=invalidemail'");
        exit();
    } else {
        if (emailExistsStaff($conn, $email, "staff.php")) {
            header('Location: ../../admin/staff.php?error=duplicateemail');
            exit();
        } else {
            if (emptyAddStaff($ime, $prezime, $adresa, $telefon, $email, $password, $titula)) {
                header('Location: ../../admin/staff.php?add=emptyinput');
            } else {
                addStaff($ime, $prezime, $adresa, $telefon, $email, $password, $titula, $conn);
            }
        }
    }
} else {
    header('Location: ../../admin/staff.php?add=failure');
    exit();
}