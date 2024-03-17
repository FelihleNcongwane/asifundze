<?php
include '../core/check_login.php';
session_start();
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>dashboard</title>
</head>
<body>
    <nav id="navbar" class="navbar">
        <div class="container nav__container">
            <a href="../index.html"><h4>asifundze</h4></a>
            <ul class="nav_menu">
                <li>
                    <div>
                        <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>
                    </div>
                </li>
                <li>
                    <a href="../actions/logout_action.php">Logout</a>
                </li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <div id="info-cards">
        <div id="courses">
            <a href="../html/1intro.php"><div id="html_course" class="course-card" >
                <span>HTML</span>
            </div></a>
            <a href=""><div id="css_course" class="course-card">
                <span>CSS</span>
            </div></a>
            <a href=""><div id="js_course" class="course-card">
                <span>JS</span>
            </div></a>
        </div>
        <div id="progress">
            <div class="box">
                <div class="circle" data-dots="70" data-percent="90" style="--bgColor: #ff0070"></div>
                <div class="text">
                    <h2>90%</h2>
                    <small>HTML</small>
                </div>
            </div>
            <div class="box">
                <div class="circle" data-dots="70" data-percent="70" style="--bgColor: #0f0"></div>
                <div class="text">
                    <h2>70%</h2>
                    <small>CSS</small>
                </div>
            </div>
            <div class="box">
                <div class="circle" data-dots="70" data-percent="60" style="--bgColor: #52a8ff"></div>
                <div class="text">
                    <h2>60%</h2>
                    <small>JavaScript</small>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/dashboard.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>