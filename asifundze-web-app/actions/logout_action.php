<?php

include '../config/core.php';

logout_user();
$_SESSION['message'] = "You have been logged out";
header('Location: ../index.html');
