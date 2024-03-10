<?php
include '../config/core.php';
check_login();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <title>Material</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="container2">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
 </script>

<div class="one left">
            <a href="allcourses.php"><div class="brand"><h4 class="h4">asifundze</h4></div></a>
            <ul>
                <a href="dashboard.php"><li class="left-section"><img src="../icons/home.svg">Dashboard</li></a>
                <a href="mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
                <a href="allcourses.php"><li class="left-section selection"><img class="blue" src="../icons/librarybooks.svg">All Courses</li></a>
                <a href="search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
                <a href="editdetails.php"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
                <a href="logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
            </ul>
        </div>
    <div class="one center coursedetails">
   
            <center><div class=''><h2>HTML Basics 101</h2></div>
            <div class=''><h4>INTRODUCTION TO HTML(Beginner Level)</h4></div></center>              
            <div class='coursedet1'>A beginner's course in HTML provides an introduction to the basics of web development, covering topics such as HTML structure, 
                tags, and creating content. Students learn to create headings, paragraphs, lists, and links using HTML tags, and gain an understanding of semantic markup. 
                The course may also cover forms, tables, multimedia elements, and the integration of CSS styles. 
                Through hands-on exercises, students develop the skills to create basic web pages and establish a foundation for further learning.
            </div>
        <a href=''><div class='enrol'>Enrol to this course</div></a>
        <div class=''>Download Materials</div>
            <div class="master">
                <div class="">
                    <div class=""> Basics Practice</div>
                    <div class=""> Explore Further</div>
                </div>
                <div class="">
                    <div class=""><a href="../material/csc208/html 208 PQ.jpg"><img src="../icons/download.png" alt=""></a></div>
                    <div class=""><a href="../material/csc208/html 208.pdf"><img src="../icons/download.png" alt=""></a></div>
                </div>
            </div>

<body>
<div class="wrapper">
<div class="profile">
<div id= "userdata" border="2">
</div>
</div>
<?php
    $rtr='';
    $fil = '../material/' .$rtr .'/' .$rtr .'.xml';
    $filename = fopen($fil, 'r') or die ("weakness" );
    while(!feof($filename)){
        $line = fgets($filename);
        echo $line;
    }
//    fclose($filename);
//    else{
//        header("location:allcourses.php");
//    }
//    }

?><br><br><br>
</div></div>
</div>
</html>