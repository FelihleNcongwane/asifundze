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
	<link rel="stylesheet" href="csscourses.css">
</head>
<?php
		include "nav.php";
	?>
<body>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Run your code here</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<textarea rows="10" cols="70" class="form-control,text_edit" 
			placeholder="Run Code here" name="message" id="my_text"
			maxlength="999" style="resize:none;margin-top:10px; margin-left:30em"></textarea>
			<br><br>		
			<input type="submit" value="Run" class= "btn" onclick="view_text()" style="margin-left:48em">
<!-- Empty div to put the text in -->
<div id="view_text">
<script type="text/javascript">
function view_text () {
// Find html elements.
var textArea = document.getElementById('my_text');
var div = document.getElementById('view_text');
// Put the text in a variable so we can manipulate it.
var text = textArea.value;
// Print the text in the div made for it.
div.innerHTML = text;
text =textArea.value;
}
</script>
</div>
		</div>  
		</div>
	</div>
<br>



</body>
</html>






</div>