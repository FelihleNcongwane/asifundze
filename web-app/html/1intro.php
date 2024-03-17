<?php
include '../core/check_login.php';
@check_login();
?>
</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
<?php

$videoFilePath = 'videos/htmlintro.mp4';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction Page</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
    <h1>Watch the Tutorial Video</h1>
    <p>Check out this video tutorial to get an understanding:</p>
    
   
    <video width="640" height="360" controls>
        <source src="<?php echo $videoFilePath; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <br>
    <br>
    <br>
    <br>
    <a href="chapter1.php" class="btn">Next</a>
    
</body>
</html>
