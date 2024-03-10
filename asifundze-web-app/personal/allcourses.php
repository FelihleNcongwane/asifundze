<?php
include '../config/core.php';
check_login();
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../style/style2.css">
<link rel="stylesheet" href="../style/allcourses.css">
<!-- <link rel="stylesheet" href="../style/bootstrap.css"> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<title>All courses</title>
<link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
</head>

<body>
    <div class="container1 container2">
        <div class="one left">
            <a href="allcourses.php">
                <div class="brand">
                    <h4 class="h4">asifundze</h4>
                </div>
            </a>
            <ul>
                <a href="dashboard.php">
                    <li class="left-section "><img src="../icons/home.svg">Dashboard</li>
                </a>
                <a href="mycourses.php">
                    <li class="left-section"><img src="../icons/menubook.svg">My Courses</li>
                </a>
                <a href="allcourses.php">
                    <li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li>
                </a>
                <a href="search.php">
                    <li class="left-section"><img src="../icons/search.svg">Search List</li>
                </a>
                <a href="editdetails.php">
                    <li class="left-section"><img src="../icons/editn.svg">Edit Profile</li>
                </a>
                <a href="logout.php">
                    <li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li>
                </a>

            </ul>
        </div>
        <div class="one center">
           <!--Main-->



           <div class="top ">
            <h2> Available Courses</h2>
        </div>
        <main> 
            <span class="l">
                <a href="../personal/allcourses.php"><img src="../icons/back.svg" class="fixed" alt=""></a>
            </span>  
            
            <ul class="courselist">
                <li class="course" onclick="html()">HTML</li>
                <li class="course" onclick="css()">CSS</li>
                <li class="course" onclick="javascript()">JavaScript</li>
                <li class="course" onclick="general-programming()">General Programming</li>
            </ul>
            
            <div class="">
                <div class="sect">
                    <div class="section">
                        <img class="row" src="" alt="">
                        <div><span class="row"></span></div>
                        <div><span class="row"></span></div>
                        <div><span class="row"></span></div>
                        <div><span class="row"></span></div> <br>
                        <div><a href="">Read course Here</a><span class="row"></span></div>
                    </div>
                </div> <br>
                
            </div>
            <div class="allcourse">1</div>
        
        </main>
        <script src="../scripts/script.js"></script>
        
        <script src="../scripts/html.js"></script>
            <script src="../scripts/general-programming.js"></script>
            <script src="../scripts/javascript.js"></script>
            <script src="../scripts/css.js"></script>    
        
        
        </div>



    </div>
</body>
</html>