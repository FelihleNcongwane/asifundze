<?php

session_start();
include '../config/connection.php';
global $conn;


if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($firstname) || empty($lastname) || empty($email) || empty($level) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "All fields are required";
        header('location: ../user/signup.html');
        exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email address format";
        header('location: ../user/signup.html');
        exit();
    }

    $sql = "SELECT * FROM Users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Email already exists";
        header('location: ../user/signup.html');
        exit();
    }

    if ($password == $confirm_password && strlen($password) >= 8){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO Users (first_name, last_name, email, password, level)
                VALUES ('$firstname', '$lastname', '$email', '$hashed_password', $level)";
        if ($result = mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Account created successfully";
            header('location: ../user/login.html');
        } else {
            $_SESSION['error'] = "Failed to create account";
            header('location: ../user/signup.html');
        }
    }
    else{
        if ($password != $confirm_password) $_SESSION['error'] = "Passwords do not match";
        else $_SESSION['error'] = "Password must be at least 8 characters long";
        header('location: ../user/signup.html');
    }
    exit();
}