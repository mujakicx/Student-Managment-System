<?php
session_start();

if (isset($_SESSION['loggedIn']) || isset($_SESSION['username'])) {
    header("Location: admin/index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <title>Hello, world!</title>
</head>
<body onload="document.body.style.opacity='1'"
      style="display:flex;justify-content: center;align-items: center;height: 100vh">

<section class="login">
    <form action="includes/login.inc.php" method="POST" class="form-group">
        <div class="loginBox">
            <div class="loginDetails ">
                <h4 style="text-align: center">Login</h4>
                <div class="loginUsername ">
                    <label for="username">Username</label><br/>
                    <input type="text" name="username" class="form-control" id="username"/><br/>
                </div>


                <div class="loginPassword">
                    <label for="password">Password</label><br/>
                    <input type="password" name="password" class="form-control" id="password"/>
                    <br/><br/>
                    <br/>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-outline-secondary" id="submit"
                       style="margin: 0 auto;"/>
            </div>
        </div>
    </form>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>