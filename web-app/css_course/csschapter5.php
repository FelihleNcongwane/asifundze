<?php
@session_start();

$_SESSION['course'] = 0;
?>
<html>
<head>
<meta charset="UTF-8">
<?php
		include "nav.php";
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Asifundze: CSS Chapter Five </title>
    <link rel="stylesheet" href="csscourses.css">
</head>
<body>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div >
					<h1>CSS Chapter Five</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div>
				<h1>CSS Margins</h1>
				<p>The CSS margin properties are used to generate space around elements.</p>
				<p>The margin properties set the size of the white space outside the border.</p>
				<p>With CSS, you have full control over the margins. There are CSS properties for setting the margin for each side of an element (top, right, bottom, and left).</p>
<hr>
				<h1>Margin - Individual Sides</h1>
				<p>CSS has properties for specifying the margin for each side of an element:</p>
				<ul>
						<li>margin-top</li>
						<li>margin-right</li>
						<li>margin-bottom</li>
						<li>margin-left</li>
				</ul>
				<p>All the margin properties can have the following values:</p>
				<ul>
						<li>auto - the browser calculates the margin</li>
						<li>length - specifies a margin in px, pt, cm, etc.</li>
						<li>% - specifies a margin in % of the width of the containing element</li>
						<li>inherit - specifies that the margin should be inherited from the parent element</li>
				</ul>
				<p>The following example sets different margins for all four sides of a element:</p>
				<h4><b>Example</b></h4>
				<a href="compiler.php" class="btn">Try it out in the Compiler >></a>

<hr>
			<h1>The auto Value</h1>
			<p>You can set the margin property to auto to horizontally center the element within its container.</p>
			<p>The element will then take up the specified width, and the remaining space will be split equally between the left and right margins:</p>
			<h4><b>Example</b></h4>
			<a href="compiler.php" class="btn">Try it out in the Compiler >></a>

<hr>
			<h1>The inherit Value</h1>
			<p>This example lets the left margin be inherited from the parent element:</p>
			<h4><b>Example</b></h4>
			<a href="compiler.php" class="btn">Try it out in the Compiler >></a>

<hr>
			<h1>All CSS Margin Properties</h1>
			<img src="../images/Margin.PNG"></img>
<hr>
<br>
<a href="csschapter6.php" class="btn"> Chapter 6>></a>

</body>
</html>