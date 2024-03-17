<?php
include '../core/check_login.php';
@check_login();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
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
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>HTML Headings</h1>
<p>HTML headings are defined with the <?php $str='<h1>'; echo htmlspecialchars($str); ?> to <?php $str='<h6>'; echo htmlspecialchars($str); ?> tags.</p>
<p><?php $str='<h1>'; echo htmlspecialchars($str); ?> defines the most important heading. <?php $str='<h6>'; echo htmlspecialchars($str); ?> defines the least important heading:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Paragraphs</h1>
<p>HTML paragraphs are defined with the <?php $str='<p>'; echo htmlspecialchars($str); ?> tag:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Links</h1>
<p>HTML links are defined with the <?php $str='<a>'; echo htmlspecialchars($str); ?> tag:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<p>The link's destination is specified in the<b> href attribute</b>.</p>
<p>Attributes are used to provide additional information about HTML elements.</p>

<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Links</h1>
<p>HTML elements with no content are called empty elements.</p>
<p><?php $str='<br>'; echo htmlspecialchars($str); ?> is an empty element without a closing tag (the <?php $str='<br>'; echo htmlspecialchars($str); ?> tag defines a line break).</p>
<p>Empty elements can be "closed" in the opening tag like this: <?php $str='<br />'; echo htmlspecialchars($str); ?>.</p>
<p>HTML5 does not require empty elements to be closed. But if you want stricter validation, or if you need to make your document readable by XML parsers, you must close all HTML elements properly.</p>
<hr><form method="post" action="">

			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
			</div>
		</div>
		<?php include "sidebar.php"; ?>

	<br>
	<br>
	<br>
	
<a href="chapter4.php" class="btn">Next</a>

</body>
</html>

