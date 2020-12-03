<?php

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function addStudent($ime, $prezime, $ime_roditelja, $adresa, $telefon, $jmbg, $email, $password, $fakultet, $odsjek, $broj_indeksa,$studijskiProgram, $conn)
{

    if (!$conn) {
        header("Location: ../../admin/students.php?error=connectionfailed?" . $conn->error);
        exit();
    } else {
        $conn->query("INSERT INTO studenti (ime,prezime,ime_roditelja,adresa,telefon,jmbg,email,password,
fakultet,odsjek,broj_indeksa,studijskiProgram) VALUES ('$ime','$prezime','$ime_roditelja','$adresa','$telefon','$jmbg','$email','$password','$fakultet','$odsjek','$broj_indeksa','$studijskiProgram');");
        header("Location: ../../admin/students.php?success=studentadded");
        exit();
    }
}

function addProfessor($ime, $prezime, $adresa, $telefon, $email, $password, $titula, $conn)
{

    if (!$conn) {
        header("Location: ../../admin/professors.php?error=connectionfailed?" . $conn->error);
        exit();
    } else {
        $conn->query("INSERT INTO profesori (ime,prezime,adresa,telefon,email,password,titula) VALUES ('$ime','$prezime','$adresa','$telefon','$email','$password','$titula');");
        header("Location: ../../admin/professors.php?success=professoradded");
        exit();
    }
}

function addAssistant($ime, $prezime, $adresa, $telefon, $email, $password, $titula, $conn)
{

    if (!$conn) {
        header("Location: ../../admin/assistants.php?error=connectionfailed?" . $conn->error);
        exit();
    } else {
        $conn->query("INSERT INTO asistenti (ime,prezime,adresa,telefon,email,password,titula) VALUES ('$ime','$prezime','$adresa','$telefon','$email','$password','$titula');");
        header("Location: ../../admin/assistants.php?success=assistantadded");
        exit();
    }
}

function addStaff($ime, $prezime, $adresa, $telefon, $email, $password, $titula, $conn)
{

    if (!$conn) {
        header("Location: ../../admin/staff.php?error=connectionfailed?" . $conn->error);
        exit();
    } else {
        $conn->query("INSERT INTO pomocno_osoblje (ime,prezime,adresa,telefon,email,password,titula) VALUES ('$ime','$prezime','$adresa','$telefon','$email','$password','$titula');");
        header("Location: ../../admin/staff.php?success=staffadded");
        exit();
    }
}


function emptyAddStudent($ime, $prezime, $ime_roditelja, $adresa, $telefon, $jmbg, $email, $password, $fakultet, $odsjek, $broj_indeksa,$studijskiProgram)
{
    $result;
    if (empty($ime) || empty($prezime) || empty($ime_roditelja) || empty($adresa) || empty($telefon) || empty($jmbg) || empty($email) || empty($password) || empty($fakultet) || empty($odsjek) || empty($broj_indeksa) || empty($studijskiProgram)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAddProfessor($ime, $prezime, $adresa, $telefon, $email, $password, $titula)
{
    $result;
    if (empty($ime) || empty($prezime) || empty($adresa) || empty($telefon) || empty($email) || empty($password) || empty($titula)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAddAssistant($ime, $prezime, $adresa, $telefon, $email, $password, $titula)
{
    $result;
    if (empty($ime) || empty($prezime) || empty($adresa) || empty($telefon) || empty($email) || empty($password) || empty($titula)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyAddStaff($ime, $prezime, $adresa, $telefon, $email, $password, $titula)
{
    $result;
    if (empty($ime) || empty($prezime) || empty($adresa) || empty($telefon) || empty($email) || empty($password) || empty($titula)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function emailExistsStudent($conn, $email, $location)
{
    if (!$conn) {
        header("Location: ../../admin/" . $location . "?error=queryfailed?" . $conn->error);
        exit();
    } else {
        $data = $conn->query("SELECT email FROM studenti WHERE email = '$email'");
        if ($data->num_rows > 1) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }
}

function emailExistsProfessor($conn, $email, $location)
{
    if (!$conn) {
        header("Location: ../../admin/" . $location . "?error=queryfailed?" . $conn->error);
        exit();
    } else {
        $data = $conn->query("SELECT email FROM profesori WHERE email = '$email'");
        if ($data->num_rows > 1) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }
}

function emailExistsAssistant($conn, $email, $location)
{
    if (!$conn) {
        header("Location: ../../admin/" . $location . "?error=queryfailed?" . $conn->error);
        exit();
    } else {
        $data = $conn->query("SELECT email FROM asistenti WHERE email = '$email'");
        if ($data->num_rows > 1) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }
}

function emailExistsStaff($conn, $email, $location)
{
    if (!$conn) {
        header("Location: ../../admin/" . $location . "?error=queryfailed?" . $conn->error);
        exit();
    } else {
        $data = $conn->query("SELECT email FROM pomocno_osoblje WHERE email = '$email'");
        if ($data->num_rows > 1) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }
}

function emptyInputLogin($username, $password)
{
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function adminExists($conn, $username, $password)
{
    if (!$conn) {
        header("Location: ../login.php?error=queryfailed?" . $conn->error);
        exit();
    } else {
        $data = $conn->query("SELECT username FROM admin WHERE username = '$username' AND password = '$password'");
        if ($data->num_rows > 0) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }
}

function loginAdmin($conn, $username, $password)
{
    $adminExists = adminExists($conn, $username, $password);
    if (!$adminExists) {
        header("Location: ../login.php");
        exit();
    } else {
        session_start();
        $_SESSION['loggedIn'] = 1;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: ../admin/index.php");
        exit();
    }

}



