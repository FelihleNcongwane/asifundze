<?php

$DATABASE = 'A2024';
$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';

$conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE) or die("Connection failed: " . $conn->connect_error);

if($conn->connect_error) die("Connection failed: " . $conn->connect_error);