<?php
include_once "dbh.inc.php";

$sql = $conn->query("SELECT userid FROM studenti");
$row = $sql->num_rows;
