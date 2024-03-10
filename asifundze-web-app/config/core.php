<?php

session_start();
function check_login(){
    if(!isset($_SESSION['uid'])){
        header('Location: ../user/login.php');
        exit();
    }
}