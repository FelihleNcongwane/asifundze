<?php
include '../config/core.php';
check_login();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/style3.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <title>My courses</title>
</head>
<body class="b4">

<div class="container1">
    <div class="one left">
        <a href="../index.html"><div class="brand"><h4 class="h4">asifundze</h4></div></a>
            <ul>
                <a href="dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="mycourses.php"><li class="left-section selection"><img  class="blue" src="../icons/menubook.svg">My Courses</li></a>
                <a href="allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
    </div>
    <div class="one center centrb">
        <table class='table1'>
                <tr  class='tr1'>
                    <td>COURSE CODE</td>
                    <td>COURSE TITLE</td>
                    <td>LEVEL</td>
                    <td colspan='3'><center>ACTIVITIES</center></td>
                </tr>
            <tr class='tr1'>
                <td>HTML Basics 101</td>
                <td>INTRODUCTION TO HTML
                </td>
                <td>Beginner Level</td>
                <td><a class='stake' href='link.php'><img class='sym' title='Read course' src='../icons/menedit.svg'></a></td>
                <td><img title='Take a test' class='sym' src='../icons/quiz.svg'></td>
            </tr>
                
            </tr>
        </table>
    </div>
</div>
</body>
<script src="../scripts/jquery-3.6.3.min.js"></script>

</html>