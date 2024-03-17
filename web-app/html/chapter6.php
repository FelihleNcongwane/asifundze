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
<h1>HTML Text Formatting</h1>
<p>HTML also defines special<b> elements </b>for defining text with a special<b> meaning</b>.</p>
<p>HTML uses elements like <?php $str='<b>'; echo htmlspecialchars($str); ?> and <?php $str='<i>'; echo htmlspecialchars($str); ?> for formatting output, like bold or italic text.</p>
<p>Formatting elements were designed to display special types of text:</p>
<ul>
	<li><?php $str='<b>'; echo htmlspecialchars($str); ?> - Bold text</li>
	<li><?php $str='<strong>'; echo htmlspecialchars($str); ?> - Important text</li>
	<li><?php $str='<i>'; echo htmlspecialchars($str); ?> - Italic text</li>
	<li><?php $str='<em>'; echo htmlspecialchars($str); ?> - Emphasized text</li>
	<li><?php $str='<mark>'; echo htmlspecialchars($str); ?> - Marked text</li>
	<li><?php $str='<small>'; echo htmlspecialchars($str); ?> - Small text</li>
	<li><?php $str='<del>'; echo htmlspecialchars($str); ?> - Deleted text</li>
	<li><?php $str='<ins>'; echo htmlspecialchars($str); ?> - Inserted text</li>
	<li><?php $str='<sub>'; echo htmlspecialchars($str); ?> - Subscript text</li>
	<li><?php $str='<sup>'; echo htmlspecialchars($str); ?> - Superscript text</li>
</ul>
<hr>

<h1>HTML <?php $str='<b>'; echo htmlspecialchars($str); ?> and <?php $str='<strong>'; echo htmlspecialchars($str); ?> Elements</h1>
<p>The HTML <?php $str='<b>'; echo htmlspecialchars($str); ?> element defines bold text, without any extra importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<p>The HTML  <?php $str='<strong>'; echo htmlspecialchars($str); ?> element defines strong text, with added semantic "strong" importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<i>'; echo htmlspecialchars($str); ?> and <?php $str='<em>'; echo htmlspecialchars($str); ?> Elements</h1>
<p>The HTML <?php $str='<i>'; echo htmlspecialchars($str); ?> element defines italic text, without any extra importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<p>The HTML <?php $str='<em>'; echo htmlspecialchars($str); ?> element defines emphasized text, with added semantic importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<small>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<small>'; echo htmlspecialchars($str); ?> element defines smaller text:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<mark>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<mark>'; echo htmlspecialchars($str); ?> element defines marked or highlighted text:</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<del>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<del>'; echo htmlspecialchars($str); ?> element defines deleted (removed) text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<ins>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<ins>'; echo htmlspecialchars($str); ?> element defines inserted (added) text.</p>
<h4>Example</h4>


<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<sub>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<sub>'; echo htmlspecialchars($str); ?> element defines subscripted text.</p>
<h4>Example</h4>


<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<sup>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<sup>'; echo htmlspecialchars($str); ?> element defines superscripted text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='  Try running something here !!!';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Give it a go!!>></a>';
echo '</pre>';
?>
<hr>


			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
<a href="../htmlexamination/index.php" class="btn">Next</a>
</body>
</html>












































