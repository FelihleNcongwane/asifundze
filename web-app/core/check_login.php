<?php

include '../settings/connection.php';


function check_login(){
    session_start();
    if(!isset($_SESSION['uid'])){
        $_SESSION['error'] = "You need to login first";
        header("Location: ../login/login.php");
    }
    exit();
}

