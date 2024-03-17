<?php
include '../core/check_login.php';
check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <style>
        /* Additional CSS */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c63ff; /* Purple Button Color */
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
        }
        .btn:hover {
            background-color: #524bcf; /* Darker Purple on Hover */
        }
    </style>
</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->\
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Your Brand</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="active">
                        <a href="index.php" style="color: #fff; text-decoration: none; padding: 10px 20px; background-color: #6c63ff; border-radius: 5px; transition: background-color 0.3s ease;">Home</a>
                    </li>
                    <li>
                        <a href="../index.php" style="color: #fff; text-decoration: none; padding: 10px 20px; background-color: #6c63ff; border-radius: 5px; transition: background-color 0.3s ease;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
        include "nav.php";
    ?>

    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Download E-books for easier learning.</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
        <h1>HTML & CSS E-Books</h1>
        <p>These Books are free to download </p>

        <br><p><b>1) HTML Basics</b></p>
        <p>This book unveils the key features of HTML. This books provide a practical guide to building webpages using HTML5</p>
        <br><a href="html.pdf" class="btn" download>Download</a><br>

        <br><p><b>2) CSS Tutorials</b></p>
        <p>This tutorial covers all versions and gives a complete understanding of CSS, starting from its basics to advanced concepts.</p>
        <br><a href="css_tutorial.pdf" class="btn" download>Download</a><br>

        <br><p><b>3) CSS_intro</b></p>
        <p>This book gives a complete understanding from basic to advance.</p>
        <br><a href="CSS_intro.pdf" class="btn" download>Download</a><br>

        <br><p><b>4) CSS</b></p>
        <p>All about CSS.</p>
        <br><a href="full.pdf" class="btn" download>Download</a><br>

        <br><p><b>5) Complete HTML</b></p>
        <p>This book covers all topics of HTML.</p>
        <br><a href="Handout_5_PF.pdf" class="btn" download>Download</a><br>

        <br><p><b>6) Complete HTML</b></p>
        <p>This book covers topics of Javascript.</p>
        <br><a href="impatient-js-preview-book.pdf" class="btn" download>Download</a><br>

        <br><p><b>7) Complete HTML</b></p>
        <p>This book covers all topics of JavaScript for professionals.</p>
        <br><a href="JavaScriptNotesForProfessionals.pdf" class="btn" download>Download</a><br>

        <br><p><b>8) Complete HTML</b></p>
        <p>This book covers brief intro in JavaScript.</p>
        <br><a href="js-in-ten-minutes.pdf" class="btn" download>Download</a><br>

    </div> 

</body>
</html>
