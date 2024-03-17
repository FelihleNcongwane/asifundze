<?php
    session_start();
    include '../actions/get_comments_action.php';
    global $posts, $comment_count;
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Discussion Page</title>
      <link rel="stylesheet" href="../css/discussion.css">
   </head>
   <body>
   <main class="cd__main">
       <div class="container">
           <div class="response-group">
               <header id="heading">
                   <h2>
                       <strong>Apple CEO</strong>
                       <i class="fa fa-angle-right"></i>
                       <span class="header-dropdown-trigger">HTML Tags</span>
                   </h2>
               </header>
               <div class="header-dropdown">
                   <div class="panel">
                       <ul>
                           <li>
                               <h2>Activity Title</h2>
                               <span>2/4</span>
                               <div class="progress">
                                   <div class="progress__complete"></div>
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="response">
                   <div class="response__number"><?php echo $comment_count;?></div>
                   <h1 class="response__title">Emma the Coder!</h1>
                   <div class="post-group">
                        <?php echo $posts; ?>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <script src="../js/script.js"></script>
   </body>
</html>