<?php

include '../settings/connection.php';
session_start();

session_unset();
session_destroy();
header("Location: ../login/login.php");
exit();