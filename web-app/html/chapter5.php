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
<h1>HTML Horizontal Rules</h1>
<p>The <?php $str='<hr>'; echo htmlspecialchars($str); ?> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.</p>
<p>The <?php $str='<hr>'; echo htmlspecialchars($str); ?> element is used to separate content (or define a change) in an HTML page:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Line Breaks</h1>
<p>The HTML <?php $str='<br>'; echo htmlspecialchars($str); ?> element defines a line break.</p>
<p>Use <?php $str='<br>'; echo htmlspecialchars($str); ?> if you want a line break (a new line) without starting a new paragraph:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>The HTML <?php $str='<pre>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<pre>'; echo htmlspecialchars($str); ?> element defines preformatted text.</p>
<p>The text inside a <?php $str='<pre>'; echo htmlspecialchars($str); ?> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<pre>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
</pre>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>
<h1>The HTML Style Attribute</h1>
<p>Setting the style of an HTML element, can be done with the<b> style attribute</b>.</p>
<p>The HTML style attribute has the following<b> syntax:</b></p>
<?php
echo '<pre>';
$str='<tagname style="property:value;">';
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>The property is a CSS property. The value is a CSS value.</p>
<hr>
<form method="post" action="">


			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	

<br>
	<br>
	<br>
<a href="chapter6.php" class="btn">Next</a>
</body>
</html>