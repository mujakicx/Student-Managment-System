<?php require_once 'loginCheck.inc.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <title>Student System</title>

</head>
<body onload="document.body.style.opacity='1'">

<nav>
    <div class="home">
        <a href="index.php">
            <svg class="w-6 h-6" viewBox="0 0 20 20" style="width: 35;height: 35;fill: white;" id="home">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
        </a>
    </div>

    <div class="userInfo">
        <img src="../assets/img/userImage.png" id="profileImage">
        <span id="name"><?php echo $_SESSION['username'] ?></span><a href="../includes/logout.inc.php">
            <svg class="logout" style="width: 25;height: 25;fill: white;" class="w-6 h-6" viewBox="0 0 20 20"
                 id="logout">
                <path d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"></path>
            </svg>
        </a>
    </div>
</nav>