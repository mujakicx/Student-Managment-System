<?php
if (isset($_POST['submit'])) {
    include_once '../../includes/dbh.inc.php';

    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $adresa = $conn->real_escape_string($_POST['adresa']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $titula = $conn->real_escape_string($_POST['titula']);

    require_once '../../includes/functions.inc.php';

    if (invalidEmail($email) !== false) {
        header("Location: '../../login.php?error=invalidemail'");
        exit();
    } else {
        if (emailExistsProfessor($conn, $email, "professors.php")) {
            header('Location: ../../admin/professors.php?error=duplicateemail');
            exit();
        } else {
            if (emptyAddProfessor($ime, $prezime, $adresa, $telefon, $email, $password, $titula)) {
                header('Location: ../../admin/professors.php?add=emptyinput');
            } else {
                addProfessor($ime, $prezime, $adresa, $telefon, $email, $password, $titula, $conn);
            }
        }
    }
} else {
    header('Location: ../../admin/professors.php?add=failure');
    exit();
}