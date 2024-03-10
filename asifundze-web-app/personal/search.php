<?php
include '../config/core.php';
check_login();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <title>Search</title>
</head>
<body>
<div class="container1">
        <div class="one left">
            <a href="../index.html"><div class="brand"><h4 class="h4">asifundze</h4></div></a>
            <ul>
                <a href="dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
                <a href="mycourses.php"><li class="left-section "><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="allcourses.php"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="search.php"><li class="left-section selection"><img  class="blue" src="../icons/search.svg">Search List</li></a>
                <a href="editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>

            </ul>
        </div>
        <div class="one center">
<div class="searchitem">
    <form action="#" method="get" class="frm">
            <input type="search" value="Hardware" class="search" name="q" id="">
        </form>
</form>
    
    <p class="reslt">1 result(s) found for 'INTRODUCTION'</p>
    <div class="searchspace"><h2>HTML Basics</h2><i class='features'>INTRODUCTION TO HTML<br/>Beginner Level<br/><i><a href='link.php'>Read Material</a></div>
    </div>
        </div>
        <div class="one right-search">
        <div class=""><h4>LEARN MORE
            <ul class="ul">
                <li><a href="https://www.pdfdrive.com/html-science-books.html">PDF DRIVE</a></li>
                <li><a href="https://freecomputerbooks.com/compscCategory.html">Free html Books</a></li>
                <li><a href="https://www.freetechbooks.com/introduction-to-html-science-f10.html">Free tech books</a></li>
                <li><a href="https://roadmap.sh/html-science">Roadmap</a></li>


            </ul>
        </h4></div>

    </div>
</body>
</html>
