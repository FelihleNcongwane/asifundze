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
            header('Location: ../personal/dashboard.html');
        }else{
            $_SESSION['error'] = "Invalid email or password";
            header('Location: ../user/login.php');
        }
        exit();
    }

}