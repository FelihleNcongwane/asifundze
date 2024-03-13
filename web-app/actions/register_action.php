<?php

session_start();
include '../settings/connection.php';
global $conn;

$_SESSION['error'] = "";
if (isset($_POST['register-submit'])){
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $confirm_password = $_POST['confirm-pwd'];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)){
        $_SESSION['error'] = "All fields are required";
        header("Location: ../login/login.php");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Invalid email";
        header("Location: ../login/login.php");
        exit();
    }
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: ../login/login.php");
        exit();
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $_SESSION['error'] = "Email already exists";
    }
    else {
        $sql = "INSERT INTO users (email, first_name, last_name, password) 
                VALUES ('$email', '$firstname', '$lastname', '$password')";
        if (mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Registration successful";
        }
        else {
            $_SESSION['error'] = "Registration failed";
        }
    }
    header("Location: ../login/login.php");
    exit();

}