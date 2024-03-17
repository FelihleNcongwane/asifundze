<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>

<body>


	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
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
					<h1>HTML Examination</h1>
				</div>
			</div>
		</div>
	</header>
	<form method="post" action="certi.php">
    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
     <h1>Congratulation!!</h1>
     <br><br> <p>You have completed HTML test to  congratulations </p><br>
	</div>
	</form>
<br>
	<?php
		include "footer.php";
	?>
	
</body>
</html>
