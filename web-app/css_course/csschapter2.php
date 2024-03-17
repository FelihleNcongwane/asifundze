<?php
@session_start();

$_SESSION['course'] = 0;
?>
<html>
<head>
<?php
		include "nav.php";
	?>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Asifundze: CSS Chapter Two </title>
    <link rel="stylesheet" href="csscourses.css">

</head>
<body>

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div>
					<h1>CSS Chapter 2</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div>
				<h1>Three Ways to Insert CSS</h1>
				<p>There are three ways of inserting a style sheet:</p>
				<ul>
					<li>External style sheet</li>
					<li>Internal style sheet</li>
					<li>Inline style</li>
				</ul>
				<hr>
				<h1>External Style Sheet</h1>
					<p>With an external style sheet, you can change the look of an entire website by changing just one file!</p>
					<p>Each page must include a reference to the external style sheet file inside the section:</p>
					<h4><b>Example</b></h4>
					<a href="compiler.php" class="btn">Try it out in the Compiler >></a>

<hr>
					<h1>Internal Style Sheet</h1>
					<p>An internal style sheet may be used if one single page has a unique style.</p>
					<p>Internal styles are defined within the section of an HTML page:</p>
					<h4><b>Example</b></h4>
					<a href="compiler.php" class="btn">Try it out in the Compiler >></a>


<hr>	
					<h1>Inline Styles</h1>
					<p>An inline style may be used to apply a unique style for a single element.</p>
					<p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
					<p>The example below shows how to change the color and the left margin of a element:</p>
					<h4><b>Example</b></h4>
					<a href="compiler.php" class="btn">Try it out in the Compiler >></a>
					<hr>
					<br>
					<a href="csschapter3.php" class="btn" style="margin-left: 10px; margin-top: 5px;">Chapter 3>></a>



	
</body>
</html>