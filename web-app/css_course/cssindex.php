<?php
@session_start();
$_SESSION['course'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include "nav.php";
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="csscourses.css">

</head>

<body>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>CSS Examination</h1>
				</div>
			</div>
		</div>
	</header>
    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
     <h1>CSS Examination</h1>
      <p>The test contains some questions and there is no time limit. It's a nice way to see how much you know or don't know about CSS.</p>
	 <p>Good Luck!!</p>
	 <a href="cssquestions.php" class="btn">Start>></a>
	</div> 	
<br>
	
</body>
</html>