<?php

include '../settings/connection.php';
global $conn;

$comment_count = 0;
$comment_count_sql = "SELECT * FROM discussions";
$comment_count_result = $conn->query($comment_count_sql);
$comment_count = $comment_count_result->num_rows;

echo $comment_count;