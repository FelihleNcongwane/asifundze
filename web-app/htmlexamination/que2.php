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
    <div class="col-md-7">
     <h1>2. Who is making the Web standards?</h1></div>
</div> 
  <div class="radio">
  <label><input type="radio" name="optradio" value="Mozilla">Mozilla</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="Microsoft">Microsoft</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="The World Wide Web Consortium">The World Wide Web Consortium</label>
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<br>
</form>
<br>
<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="The World Wide Web Consortium")
		{
			//echo 'true';
			echo '<a href="que3.php" class="btn">Next>></a>';
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
