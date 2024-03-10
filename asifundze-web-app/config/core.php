<?php

session_start();
function check_login(){
    if(!isset($_SESSION['uid'])){
        header('Location: ../user/login.php');
        exit();
    }
}

function logout_user(){
    session_unset();
    header('Location: ../personal/logout.php');
    exit();
}