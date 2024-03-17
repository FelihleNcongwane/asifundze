<?php
    include '../core/check_login.php';
    check_login();
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
       <link rel="stylesheet" href="../css/styles.css">
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
   </head>
   <body>
<!--   <nav class="nav">-->
<!--       <div class="nav-logo">-->
<!--           <p>asifundze</p>-->
<!--       </div>-->
<!--       <div class="nav-menu" id="navMenu">-->
<!--           <ul>-->
<!--               <li><a href="../index.html" class="link">Home</a></li>-->
<!--               <li><a href="../view/about.html" class="link">About Us</a></li>-->
<!--               <li><a href="../view/contact.html" class="link">Contact Us</a></li>-->
<!--           </ul>-->
<!--       </div>-->
<!--       <div class="nav-button">-->
<!--           <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>-->
<!--           <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>-->
<!--       </div>-->
<!--       <div class="nav-menu-btn">-->
<!--           <i class="bx bx-menu" onclick="myMenuFunction()"></i>-->
<!--       </div>-->
<!--   </nav>-->

   <main class="cd__main">
       <div class="container">
           <div class="response-group">
               <header id="heading">
                   <h2>
                       <strong>HTML</strong>
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
   <script>
       let comment = document.getElementById('comment-content').value;

       // update comment counter with ajax
         $(document).ready(function(){
              $.ajax({
                url: '../functions/get_comment_count.php',
                type: 'POST',
                success: function(data){
                     $('#comment_counter').html(data);
                }
              });
         });

   </script>


<script>
$(document).ready(function(){
 
 $('#post_id').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../functions/get_comment_count.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#post_id')[0].reset();
     $('#post').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"../functions/get_comment_count.php",
   method:"POST",
   success:function(data)
   {
    $('#posts').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>



   <script src="../js/script.js"></script>
   </body>
</html>