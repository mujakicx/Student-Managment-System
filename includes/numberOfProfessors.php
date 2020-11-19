<?php
include_once "dbh.inc.php";

$sql = $conn->query("SELECT userid FROM profesori");
$row = $sql->num_rows;
