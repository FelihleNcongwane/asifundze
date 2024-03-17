<?php

$DATABASE = 'AF2024';
$HOST = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'cs341webtech';

$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

if($conn->connect_error) die("Connection failed: " . $conn->connect_error);