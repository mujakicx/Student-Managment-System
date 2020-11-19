<?php

if (isset($_POST['key'])) {
    include_once "../../includes/dbh.inc.php";

    if ($_POST['key'] == 'edit') {
        include_once "../../includes/dbh.inc.php";
        $id = $_POST['rowId'];


        $sql = $conn->query("SELECT * FROM asistenti WHERE userid = '$id'");
        $data = $sql->fetch_assoc();
        exit(json_encode($data));
    }

    if ($_POST['key'] == 'save_edit') {

        $id = $conn->real_escape_string($_POST['rowId']);
        $ime = $conn->real_escape_string($_POST['ime']);
        $prezime = $conn->real_escape_string($_POST['prezime']);
        $titula = $conn->real_escape_string($_POST['titula']);
        $adresa = $conn->real_escape_string($_POST['adresa']);
        $telefon = $conn->real_escape_string($_POST['telefon']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);


        $conn->query("UPDATE asistenti
SET ime = '$ime', prezime = '$prezime', titula = '$titula', adresa = '$adresa', telefon = '$telefon', email = '$email', password = '$password'WHERE userid = '$id';");

        $data2 = 'Promjena izvšena uspješno !';
        exit($data2);
    }

    if ($_POST['key'] == 'delete') {

        $id = $conn->real_escape_string($_POST['rowId']);
        $conn->query("DELETE FROM asistenti WHERE userid = '$id'");

        exit('Korisnik je izbrisan iz baze !');

    }


}

