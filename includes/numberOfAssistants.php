<?php
include_once "dbh.inc.php";

$sql = $conn->query("SELECT userid FROM asistenti");
$row = $sql->num_rows;
