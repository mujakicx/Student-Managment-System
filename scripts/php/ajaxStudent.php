<?php

if (isset($_POST['key'])) {
    include_once "../../includes/dbh.inc.php";
    if ($_POST['key'] == 'edit') {
        include_once "../../includes/dbh.inc.php";
        $id = $_POST['rowId'];


        $sql = $conn->query("SELECT * FROM studenti WHERE userid = '$id'");
        $data = $sql->fetch_assoc();
        exit(json_encode($data));
    }

    if ($_POST['key'] == 'save_edit') {

        $id = $conn->real_escape_string($_POST['rowId']);
        $ime = $conn->real_escape_string($_POST['ime']);
        $prezime = $conn->real_escape_string($_POST['prezime']);
        $ime_roditelja = $conn->real_escape_string($_POST['ime_roditelja']);
        $adresa = $conn->real_escape_string($_POST['adresa']);
        $telefon = $conn->real_escape_string($_POST['telefon']);
        $jmbg = $conn->real_escape_string($_POST['jmbg']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);
        $fakultet = $conn->real_escape_string($_POST['fakultet']);
        $odsjek = $conn->real_escape_string($_POST['odsjek']);
        $broj_indeksa = $conn->real_escape_string($_POST['broj_indeksa']);

        $conn->query("UPDATE studenti
SET ime = '$ime', prezime = '$prezime', ime_roditelja = '$ime_roditelja', adresa = '$adresa', telefon = '$telefon', jmbg = '$jmbg', email = '$email', password = '$password', fakultet = '$fakultet', odsjek = '$odsjek', broj_indeksa = '$broj_indeksa'
WHERE userid = '$id';");

        $data2 = 'Promjena izvšena uspješno !';
        exit($data2);
    }

    if ($_POST['key'] == 'delete' && $_POST['role'] == 'student') {

        $id = $conn->real_escape_string($_POST['rowId']);
        $conn->query("DELETE FROM studenti WHERE userid = '$id'");

        exit('Korisnik je izbrisan iz baze !');

    } elseif ($_POST['key'] == 'delete' && $_POST['role'] == 'profesor') {

        $id = $conn->real_escape_string($_POST['rowId']);
        $conn->query("DELETE FROM profesori WHERE userid = '$id'");

        exit('Korisnik je izbrisan iz baze !');
    }
}

