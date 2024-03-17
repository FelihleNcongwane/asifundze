<?php

include '../settings/connection.php';
global $conn;

session_start();
$user_id = $_SESSION['uid'];
if(isset($_POST['comment-submit'])){
    if(empty($_POST['comment-content'])) {
        unset($_POST['comment-content']);
        header('Location: ../user/discussions.php');
        exit();
    }
    $comment = $_POST['comment-content'];

    $sql = "INSERT INTO discussions (user_id, post) VALUES ($user_id, '$comment')";

    if($conn->query($sql)){
        header('Location: ../user/discussions.php');
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    exit();
}

