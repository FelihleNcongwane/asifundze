<?php

include '../settings/connection.php';
global $conn;

session_start();
$_SESSION['error'] = "";
if (isset($_POST['login-submit'])){
    $email = $_POST['login-email'];
    $password = $_POST['login-pwd'];

    if (empty($email) || empty($password)){
        $_SESSION['error'] = "All fields are required to login";
        header("Location: ../login/login.php");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Invalid email format";
        header("Location: ../login/login.php");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
        echo '<script>alert("Incorrect email!");</script>';
        echo '<script>window.location.href="../login/login.php";</script>';
    }else {
        $row = $result->fetch_assoc();
        $hash_pwd = $row['password'];
        $hash = password_verify($password, $hash_pwd);
        if (!$hash) {
            echo '<script>alert("Incorrect Password!");</script>';
            echo '<script>window.location.href="../login/login.php";</script>';
        } else {
            $_SESSION['uid'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            header("Location: ../user/discussions.php");
        }
    }
    exit();


}
