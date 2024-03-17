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
	<title>Asifundze</title>
    <link rel="stylesheet" href="csscourses.css">
</head>
<body>
	
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>CSS As A Course</h1>
				</div>
			</div>
		</div>
	</header>
		<div class="container-fluid">
			<h1>CSS Fundamentals</h1><br><label>Our CSS tutorial is a learning module that will teach you how to set and control
                 the style and layout of a website.Read our carefully selected chapters, take the interactive quizzes, complete
                  entertaining exam, and practice filling out actual CSS templates. Whether you want to gain a new skill to further your career, or just want to learn
                   something new, we guarantee that you will enjoy learning while playing and playing while learning with our 
                   CSS tutorial!
                </label><button onclick="location.href='csschapter1.php'" class="btn btn-block">Start Learing>></button>
		</div>
		<div class="container-fluid">
			<h1>Chapters :</h1><ol>
			<li>Chapter 1: What is CSS?</li>
			<li>Chapter 2: Three Ways to Insert CSS</li>
			<li>Chapter 3: CSS Colors</li>
			<li>Chapter 4: Border Style</li>
			<li>Chapter 5: CSS Margins</li>
			<li>Chapter 6: CSS Padding</li>
			</ol>
		</div>
		

</body>
</html>