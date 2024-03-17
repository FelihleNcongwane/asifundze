<?php

include '../settings/connection.php';
session_start();

function check_login(){
    if(!isset($_SESSION['uid'])){
        $_SESSION['error'] = "You need to login first";
        header("Location: ../login/login.php");
        exit();
    }
}

