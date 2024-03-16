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
                   <div class="response__number">1</div>
                   <h1 class="response__title">Emma the Coder!</h1>
                   <div class="post-group">
                       <div class="post">
                           <div class="post__avatar"></div>
                           <h3 class="post__author">Emmanuel Okine</h3>
                           <h4 class="post__timestamp">every second</h4>
                           <p class="post__body">I am the coder!</p>
                           <div class="post__actions">
                               <div class="button button--approve">
                                   <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                               </div>
                               <div class="button button--deny">
                                   <i class="fa fa-thumbs-o-down"></i><i class="fa fa-thumbs-down solid"></i>
                               </div>
                               <div class="button button--fill comment-trigger">
                                   <span>Comment...</span>
                               </div>
                               <div class="button button--flag">
                                   <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>2
                               </div>
                               <div class="post__comments">
                                   <div class="comment-group">
                                       <div class="post">
                                           <div class="post__avatar comment__avatar"></div>
                                           <h3 class="post__author">Emmanuel Okine</h3>
                                           <h4 class="post__timestamp">every second</h4>
                                           <p class="post__body">I am the coder!</p>
                                       </div>
                                       <div class="post">
                                           <div class="post__avatar comment__avatar"></div>
                                           <h3 class="post__author">Emmanuel Okine</h3>
                                           <h4 class="post__timestamp">every second</h4>
                                           <p class="post__body">I am the coder!</p></div>
                                   </div>
                                   <div class="comment-form">
                                       <form method="post" action="../actions/add_comment_action.php">
                                           <div class="comment-form__avatar"></div>
                                           <label for="comment-content">
                                               <textarea name="comment-content" id="comment-content"></textarea>
                                           </label>
                                           <div class="comment-form__actions">
                                               <input type="button" name="comment-cancel" class="button button--light cancel" value="Cancel">
                                               <input type="submit" name="comment-submit" class="button button--confirm" value="Comment">
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </main>
   <script src="../js/script.js"></script>
   </body>
</html>