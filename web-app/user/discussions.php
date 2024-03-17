<?php
    include '../core/check_login.php';
    @check_login();
    include '../settings/connection.php';
    include '../actions/get_comments_action.php';
    global $posts, $comment_count;
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Discussion Page</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

       <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
      <link rel="stylesheet" href="../css/discussion.css">
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
   </head>
   <body>
   <main class="cd__main">
       <div class="container">
           <div class="response-group">
               <header id="heading">
                   <h2>
                       <a href="../html/1intro.php" style="text-decoration: none; color:white;"><strong>HTML</strong></a>

                   </h2>
               </header>

               <div class="response">
                   <div class="response__number" id="comment_counter"></div>
                   <h1 class="response__title">Discussion Page</h1>
                   <div class="post-group" id="post-group-content">
                        <?php echo $posts; ?>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </body>
</html>