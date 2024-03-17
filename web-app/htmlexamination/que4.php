<?php
include '../core/check_login.php';
@check_login();
?>
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
	<form method="post" action="">
	<div class="container">
<div class="row">
    <div class="col-md-6">
     <h1>4. Choose the correct HTML tag to make a text bold</h1></div>
</div> 
  <div class="radio">
  <label><input type="radio" name="optradio" value="Bold">Bold</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">b</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="bb">bb</label>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	<br>
</form>
<br>
<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
			//echo 'true';
			echo '<a href="que5.php" class="btn">Next>></a>';
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
