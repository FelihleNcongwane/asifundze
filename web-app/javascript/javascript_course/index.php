<?php
include '../../core/check_login.php';
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="javascriptcourse.css">
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.ico">

</head>

<body>
    <?php
        include "nav.php";
        $strconn = mysqli_connect("localhost", "root", "", "project"); 
        if(!$strconn)
            echo "Connection failed" . mysqli_connect_error();
        else {}
        session_start();
        if(isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
        } else {
            echo 'session not started';
        }
    ?>

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>JavaScript Examination</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
        <h1>JavaScript Examination</h1>
        <p>The test contains some questions and there is no time limit. It's a nice way to see how much you know or don't know about JavaScript.</p>
        <p>Good Luck!!</p>
        <a href="JavaScript_Quiz.php" class="btn">Start>></a>
    </div> 
    
    <br>
</body>
</html>
