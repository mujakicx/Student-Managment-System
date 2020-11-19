<?php
include_once "dbh.inc.php";

$sql = $conn->query("SELECT userid FROM pomocno_osoblje");
$row = $sql->num_rows;
