<?php
    session_start();
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
      <link rel="stylesheet" href="../css/discussion.css">
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
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
                   <div class="response__number" id="comment_counter"></div>
                   <h1 class="response__title">Emma the Coder!</h1>
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