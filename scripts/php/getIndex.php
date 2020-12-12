<?php
include_once '../../includes/dbh.inc.php';

if(isset($_POST['getIndex'])) {
    $id = $conn->query("SELECT userid FROM studenti ORDER BY userid DESC LIMIT 1");
    $row = $id->fetch_assoc();
    exit($row['userid']);
}
