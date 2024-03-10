<?php
session_start();
include '../config/core.php';
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/allcourses.css">
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <title>Edit Details</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
<div class="container2">
    <div class="one left">
        <a href="../index.html"><div class="brand"><h4 class="h4">asifundze</h4></div></a>
        <ul>
            <a href="dashboard.php"><li class="left-section "><img src="../icons/home.svg">Dashboard</li></a>
            <a href="mycourses.php"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
            <a href="allcourses.php"><li class="left-section "><img src="../icons/librarybooks.svg">All Courses</li></a>
            <a href="search.php"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
            <a href="editdetails.php"><li class="left-section selection"><img class="blue" src="../icons/editn.svg">Edit Profile</li></a>
            <a href="logout.php"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
        </ul>
    </div>

    <div class="one center effe">
        <div>
            <h4 class="head7">Edit Your Profile</h4>
        </div>
        <div>
            <form action="../actions/editdetails_action.php" method="POST" autocomplete="on" accept-charset="">
                <div class="mvr3">
                    <div class="mvr1">
                        <label for=fname"" class="mlm">First Name</label>
                        <label for="lname" class="mlm">Last Name</label>
                        <label for="email" class="mlm" >E-mail</label>
<!--                        <label for="matrcc1" class="mlm">Matric No</label>-->
                        <label for="password" class="mlm">Password</label>
                        <label for="new_password" class="mlm">New Password</label>
                        <label for="confirm_password" class="mlm">Confirm Password</label>
                    </div>
                    <div class="mvr2">
                        <input type="text" id="fname" class="form-control mlm"  name="fname" placeholder=<?php echo $_SESSION['first_name']?>>
                        <input type="text" id="lname" class="mlm"  name="lname" placeholder=<?php echo $_SESSION['last_name']?>>
                        <input type="text" id="email" class="editmail" name="email" readonly value=<?php echo $_SESSION['email']?>>
<!--                        <input type="text" id="matrcc1" class="mlm" name="matrcc1" value="200123301">-->
                        <input type="password" id="password" class="mlm" name="old_password" pattern=".{4,}">
                        <input type="password" id="new_password" class="mlm" name="new_password" pattern=".{4,}">
                        <input type="password" id="confirm_password" class="mlm" name="confirm_password" pattern=".{4,}">
                        <div class="updateit">
                            <input type="submit" id="updatebtn" class="same" name="updatebtn" value="Update Details">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <h4 class="deleted">Delete Account</h4>
        <p>Do you wish to permanently delete this account? If you click the button below, your account will be deleted from the database and there will be no way to restore your account.</p>
        <a href="../actions/editdetails_action.php?id=<?php echo $_SESSION['uid'];?>"><button type="submit" class="same redbttn" name="deletebtn">Delete Account</button></a>
    </div>
</div>
</body>

</html>
