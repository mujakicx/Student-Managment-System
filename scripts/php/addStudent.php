<?php
if (isset($_POST['submit'])) {
    require_once '../../includes/dbh.inc.php';

    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $ime_roditelja = $conn->real_escape_string($_POST['ime_roditelja']);
    $adresa = $conn->real_escape_string($_POST['adresa']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $jmbg = $conn->real_escape_string($_POST['jmbg']);
    $email = $conn->real_escape_string($_POST['email']);
    $tHashPW = strtolower($ime) . rand(100,1000);
    $password = password_hash($tHashPW, PASSWORD_BCRYPT);
    $fakultet = $conn->real_escape_string($_POST['fakultet']);
    $studijskiProgram = $conn->real_escape_string($_POST['studijskiProgram']);
    $odsjek = $conn->real_escape_string($_POST['odsjek']);

    $broj_indeksa = $conn->real_escape_string($_POST['broj_indeksa']);

    require_once '../../includes/functions.inc.php';

    if (invalidEmail($email) !== false) {
        header("Location: '../../login.php?error=invalidemail'");
        exit();
    } else {
        if (emailExistsStudent($conn, $email, "students.php")) {
            header('Location: ../../admin/students.php?error=duplicateemail');
            exit();
        } else {
            if (emptyAddStudent($ime, $prezime, $ime_roditelja, $adresa, $telefon, $jmbg, $email, $password, $fakultet, $odsjek, $broj_indeksa,$studijskiProgram)) {
                header('Location: ../../admin/students.php?add=emptyinput');
            } else {
                addStudent($ime, $prezime, $ime_roditelja, $adresa, $telefon, $jmbg, $email, $password, $fakultet, $odsjek, $broj_indeksa,$studijskiProgram, $conn);
            }
        }
    }


} else {
    header('Location: ../../admin/students.php?error=nosubmit');
    exit();
}