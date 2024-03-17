<?php
include '../../core/check_login.php';
@check_login();
$_SESSION['course'] = 0;
?>

<!DOCTYPE html>
<?php
		include "nav.php";
	?>
<head>
	<meta charset="utf-8">
	<title>ASIFUNDZE-JavaScript</title>
	<link rel="stylesheet" href="javascriptcourse.css">
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.ico">
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
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>What is JavaScript?</h1>
					<p>JavaScript is a frontend language that provides dynamism for HTML and soemtimes CSS elements on a web page.<p>
					<ul>
						<li>Here are some things JavaScript can do </li>
						<li>JavaScript Can Change HTML Content</li>
						<li>JavaScript Can Change HTML Attribute Values
						</li>
						<li>JavaScript Can Change HTML Styles (CSS)
						</li>
						<li>JavaScript Can Show HTML Elements
						</li>
						
					</ul>
					<hr>
					<h1></h1>
					<h4><b></b></h4>
					<a href="chapter2.php" class="btn">Next>></a>
					</form>
            </div>
</body>
</html>
