<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="design.css">
    <style>
      /* Additional CSS */

.container {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

.btn-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 20px 0; /* Fixed padding for buttons */
    width: 350px; /* Set a fixed width for the buttons */
    background-color: #6c63ff; /* Purple Button Color */
    border-radius: 5px;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-right: 20px; /* Added margin-right for separation between buttons */
}

.btn:last-child {
    margin-right: 0; /* Remove margin-right from the last button to prevent extra space */
}

.btn:hover {
    background-color: #524bcf; /* Darker Purple on Hover */
}

    </style>
</head>
<body>
    <?php
        include "nav.php";
        $strconn=mysqli_connect("localhost","root","","project");
        if(!$strconn)
            echo "Connection failed".mysqli_connect_error();
        else{}
        @session_start();
        if(isset($_SESSION["username"]))
        {
            $username=$_SESSION["username"];
        }
        else{ echo 'session not started';}
    ?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Welcome <?php echo $username;?></h1>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div id="courses">
        <section class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="featured-box">
                        <a href="Answer.php" class="btn"> <!-- Added class="btn" for button styling -->
                            <i class="fa fa-cogs fa-2x"></i>
                            <div class="text">
                                <h3>Answer User`s Questions</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box">
                        <a href="manage.php" class="btn"> <!-- Added class="btn" for button styling -->
                            <i class="fa fa-cogs fa-2x"></i>
                            <div class="text">
                                <h3>Manage Profile</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
