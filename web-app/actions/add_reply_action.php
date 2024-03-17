<?php

include '../settings/connection.php';
global $conn;

@session_start();
if(isset($_POST['reply-submit'])){
    $uid = $_SESSION['uid'];
    $post_id = $_POST['post_id'];
    $reply = $_POST['reply-content'];

    if(empty($reply)){
        unset($_POST['reply-content']);
        header('Location: ../user/discussions.php');
        exit();
    }


    $sql = "INSERT INTO replies(user_id, post_id, post) VALUES ($uid, $post_id, '$reply')";

    if($conn->query($sql)){
        header("Location: ../user/discussions.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    exit();
}