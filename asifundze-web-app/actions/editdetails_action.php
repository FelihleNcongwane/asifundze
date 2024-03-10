<?php

include '../config/connection.php';
global $conn;

// Edit the user details and update the database
if(isset($_POST['updatebtn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $old_password = $_POST['old_password'];
    $password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $name_sql = "SELECT first_name, last_name FROM Users WHERE id = '$_SESSION[uid]'";
    $name_result = mysqli_query($conn, $name_sql);
    $row = mysqli_fetch_assoc($name_result);
    $old_fname = $row['first_name'];
    $old_lname = $row['last_name'];

    if (empty($fname)) $fname = $old_fname;
    if (empty($lname)) $lname = $old_lname;
    if(empty($password)&& empty($confirm_password)){
        $sql = "UPDATE Users SET first_name = '$fname', last_name = '$lname' WHERE id = '$_SESSION[uid]'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['first_name'] = $fname;
            $_SESSION['last_name'] = $lname;
            $_SESSION['success'] = "Details updated successfully";
        }else{
            $_SESSION['error'] = "Failed to update details";
        }
        header('Location: ../personal/editdetails.php');
        exit();
    }


    if($password != $confirm_password){
        if(empty($old_password)) {
            $_SESSION['error'] = "Old password is required";
            header('Location: ../personal/editdetails.php');
            exit();
        }
        $_SESSION['error'] = "Passwords do not match";
        header('Location: ../personal/editdetails.php');
        exit();
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $old_pwd_sql = "SELECT password FROM Users WHERE id = '$_SESSION[uid]'";
    $sql = "UPDATE Users SET first_name = '$fname', last_name = '$lname', password = '$password' WHERE id = '$_SESSION[uid]'";

    // Verify the old password
    if($old_pwd_result= mysqli_query($conn, $old_pwd_sql)){
        $row = mysqli_fetch_assoc($old_pwd_result);
        if($row['password'] == $password) {
            $_SESSION['error'] = "New password cannot be the same as the old password";
        }else if(!password_verify($old_password, $row['password'])) {
            $_SESSION['error'] = "Old password is not the same";
        } else {
            if(mysqli_query($conn, $sql)){
                $_SESSION['first_name'] = $fname;
                $_SESSION['last_name'] = $lname;
                $_SESSION['success'] = "Details updated successfully";
            }else{
                $_SESSION['error'] = "Failed to update details";
            }
        }

        header('Location: ../personal/editdetails.php');
        exit();
    }

    if(mysqli_query($conn, $sql)){
        $_SESSION['first_name'] = $fname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['success'] = "Details updated successfully";
        header('Location: ../personal/dashboard.php');
        exit();
    }
}


// Delete the user's details
if(isset($_GET['delete_val'])){
    $sql = "DELETE FROM Users WHERE id = '$_SESSION[uid]'";
//    if(mysqli_query($conn, $sql)) {
//        $_SESSION['success'] = "Account deleted successfully";
//        logout_user();
//    }
    echo $_SESSION["uid"];
    echo "Failed to delete account";
    $_SESSION['error'] = "Failed to delete account";
//    header('Location: ../personal/editdetails.php');

    exit();
}