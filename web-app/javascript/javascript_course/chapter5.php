<?php
include '../../core/check_login.php';
@check_login();
$_SESSION['course'] = 0;
?>

<!DOCTYPE html>
<head>
<?php
		include "nav.php";
	?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="javascriptcourse.css">
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.ico">

    <title>ASIFUNDZE-JavaScript</title>
</head>
<body>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>JavaScript</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
			<div class="col-md-9 col-md-push-2" >
					<h1>JavaScript DOM</h1>
					<p>What is the DOM?<p>
                    <p>The DOM defines a standard for accessing documents</p>
                    <p>The W3C DOM standard is separated into 3 different parts:</p>
                    <ul>
                        <li>Core DOM - standard model for all document types</li>
                        <li>XML DOM - standard model for XML documents</li>
                        <li>HTML DOM - standard model for HTML documents</li>
                    </ul>
                    <p>What does the HTML DOM define:</p>
                    
					<ul>
						<li>The HTML elements as objects </li>
						<li>JavaScript Can Change HTML Content</li>
						<li>The methods to access all HTML elements</li>
						<li>The events for all HTML elements</li>	
					</ul>
					<hr>
					<h1></h1>
					<h4><b></b></h4>
					<a href="index.php" class="btn"> Next>></a>
</body>
</html>
