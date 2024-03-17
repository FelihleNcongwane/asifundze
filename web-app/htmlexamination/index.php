<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design.css">

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
    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
     <h1>HTML Examination</h1>
      <p>The test contains 10 questions and there is no time limit.it's a nice way to see how much you know or don't know about HTML.</p>
		  <p>At the end of the exam you will get certificate.</p>
	 <p>Good Luck!!</p>
	 <a href="que1.php" class="btn">Start>></a>
	</div> 	
<br>
	<?php
		include "footer.php";
	?>
	
</body>
</html>
