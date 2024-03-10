<?php

session_start();
include '../config/connection.php';
global $conn;

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE email = '$email'";

    if($result = mysqli_query($conn, $sql)){
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];

        if(password_verify($password, $hash)){
            $_SESSION['uid'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            header('Location: ../personal/dashboard.php');
        }else{
            $_SESSION['error'] = "Invalid email or password";
            header('Location: ../user/login.php');
        }
        exit();
    }

}