<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

</head>

<body>
<div class="container">


	<?php
		include "nav.php";
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Examination</h1>
				</div>
			</div>
		</div>
	</header>
	<form method="POST" action="">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>1. What does HTML stand for?</h1></div>
	</div> 
	<div class="radio">
		<label><input type="radio" name="optradio" value="Hyper text markup Lnaguage">Hypertext Markup Language</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="Hyperlink text markup language">Hyperlink text Markup language</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="hyper tool markup language">Hypertool Markup Language</label>
	</div>
	<!--<a href="que2.php" class="btn" align="left">Next>></a>-->
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	<br>
	</form>
<br>
<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="Hyper text markup Lnaguage")
		{
			//echo 'true';
			echo '<a href="que2.php" class="btn">Next>></a>';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect answer.Try Again !</div>";
		}
	}
?>
</div>
<br>

</body>
</html>
