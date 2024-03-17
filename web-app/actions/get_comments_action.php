<?php

include '../settings/connection.php';
global $conn;

session_start();


$sql = "SELECT * FROM Discussions";

$result = $conn->query($sql);
$posts = "";

while ($row = $result->fetch_assoc()) {
    $uid = $row['user_id'];
    $user_sql = "SELECT * FROM Users WHERE id =$uid";
    $user = $conn->query($user_sql);
    $user = $user->fetch_assoc();
    $full_name = $user['first_name'] . " " . $user['last_name'];


    $comment_count = $result->num_rows;
    $comment = $row['post'];
    $comment_id = $row['id'];
    $comment_author = $full_name;
    $comment_time = $row['p_time'];
    $comment_likes = $row['likes'];
    $comment_dislikes = $row['dislikes'];

    $replies_sql = "SELECT * FROM replies WHERE post_id=$comment_id";
    $results = $conn->query($replies_sql);
    $reply_count = $results->num_rows;

    $posts .= '<div class="post">
                               <div class="post__avatar"></div>
                               <h3 class="post__author">'.$comment_author.'</h3>
                               <h4 class="post__timestamp">'.$comment_time.'</h4>
                               <p class="post__body">'.$comment.'</p>
                               <div class="post__actions">
                                   <div class="button button--approve">
                                       <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                                   </div>
                                   <div class="button button--deny">
                                       <i class="fa fa-thumbs-o-down"></i><i class="fa fa-thumbs-down solid"></i>
                                   </div>
                                   <div class="button button--fill comment-trigger">
                                       <span>View comments...</span>
                                   </div>
                                   <div class="button button--flag">
                                       <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>'.$reply_count.'
                                   </div>
                                   <div class="post__comments">
                                       <div class="comment-group">';

                                $replies_sql = "SELECT * FROM replies WHERE post_id=$comment_id";
                                $results = $conn->query($replies_sql);

                                if($results->num_rows>0) {
                                    while($replies = $results->fetch_assoc()){
                                        $replier_id = $replies['user_id'];
                                        $replier_sql = "SELECT * FROM users WHERE id= $replier_id";
                                        $replier = $conn->query($replier_sql);
                                        $replier = $replier->fetch_assoc();
                                        $replier_name = $replier['first_name']." ". $replier['last_name'];

                                        $reply = $replies['post'];
                                        $reply_time = $replies['p_time'];
                                        $reply_likes = $replies['likes'];
                                        $reply_dislikes = $replies['dislikes'];

                                        $posts.=    '<div class="post">
                                                  <div class="post__avatar comment__avatar"></div>
                                                  <h3 class="post__author">
                                                    '.$replier_name.'
                                                  </h3>
                                                  <h4 class="post__timestamp">
                                                    '.$reply_time.' 
                                                  </h4>
                                                  <p class="post__body">
                                                  '.$reply.'                                                  
                                                  </p>
                                            </div>';
                                    }
                                }

                                        
                                      $posts .= '</div>                    
                               <div class="comment-form">
                                   <form method="post" action="../actions/add_comment_action.php">
                                       <div class="comment-form__avatar"></div>
                                       <label for="reply-content">
                                           <textarea name="reply-content" id="reply-content"></textarea>
                                       </label>
                                       <div class="comment-form__actions">
                                           <input type="submit" name="reply-submit" class="button button--confirm" value="Reply">
                                           <input type="button" name="reply-cancel" class="button button--light cancel" value="Cancel"> 
                                       </div>
                                   </form>
                               </div>
                           </div>
                           </div>
                       </div>';

}
{
    $posts.= "<div class='post'>
                   <div class='comment-form'>
                       <form method='post' action='../actions/add_comment_action.php'>
                           <div class='comment-form__avatar'></div>
                           <label for='comment-content'>
                                <textarea name='comment-content' id='comment-content'></textarea>
                           </label>
                                <div class='comment-form__actions'>
                                    <input type='submit' name='comment-submit' class='button button--confirm' value='Comment'>
                                    <input type='button' name='comment-cancel' class='button button--light cancel' value='Cancel'>
                       </form>
                                </div>
                   </div>
               </div>";
}

//if($result->num_rows > 0) {
//    // get the comment
//    // get the replies to the comment
//    // append all of them to one variable. The replies coming after the comment
//
//    while ($row = $result->fetch_assoc()) {
//        $comment_count = $result->num_rows;
//        $comment = $row['post'];
//        $comment_id = $row['id'];
//        $comment_author = $full_name;
//        $comment_time = $row['p_time'];
//        $comment_likes = $row['likes'];
//        $comment_dislikes = $row['dislikes'];
//
//        $posts .= "<div class='post'>
//                           <div class='post__avatar'></div>
//                           <h3 class='post__author'>".$comment_author."</h3>
//                           <h4 class='post__timestamp'>".$comment_time."</h4>
//                           <p class='post__body'>".$comment."</p>
//                           <div class='post__actions'>
//                               <div class='button button--approve'>
//                                   <i class='fa fa-thumbs-o-up'></i><i class='fa fa-thumbs-up solid'></i>
//                               </div>
//                               <div class='button button--deny'>
//                                   <i class='fa fa-thumbs-o-down'></i><i class='fa fa-thumbs-down solid'></i>
//                               </div>
//                               <div class='button button--fill comment-trigger'>
//                                   <span>Comment...</span>
//                               </div>
//                               <div class='button button--flag'>
//                                   <i class='fa fa-comment-o'></i><i class='fa fa-comment solid'></i>2
//                               </div>
//                               <div class='post__comments'>
//                                   <div class='comment-group'>";
//
//        $sql = "SELECT * FROM Replies WHERE post_id = $comment_id";
//        $replies = $conn->query($sql);
//
//        if ($replies->num_rows > 0) {
//            while ($reply = $replies->fetch_assoc()) {
//                $reply_count = $replies->num_rows;
//                $reply_time = $reply['p_time'];
//                $reply_uid = $reply['user_id'];
//                $reply_likes = $reply['likes'];
//                $reply_content = $reply['post'];
//                $reply_dislikes = $reply['dislikes'];
//
//                $author_sql = "SELECT * FROM Users WHERE id = $reply_uid";
//                $author = $conn->query($author_sql);
//                $author = $author->fetch_assoc();
//
//                $reply_author = $author['first_name'] . " " . $author['last_name'];
//                $posts .= "<div class='post'>
//                                   <div class='post__avatar comment__avatar'></div>
//                                   <h3 class='post__author'>".$reply_author."</h3>
//                                   <h4 class='post__timestamp'>".$reply_time."</h4>
//                                   <p class='post__body'>".$reply_content."</p>
//                               </div>";
//            }
//        }else{
//            $posts .= "";
//        }
//        $posts .= "</div>
//                           <div class='comment-form'>
//                               <form method='post' action='../actions/add_comment_action.php'>
//                                   <div class='comment-form__avatar'></div>
//                                   <label for='comment-content'>
//                                       <textarea name='comment-content' id='comment-content'></textarea>
//                                   </label>
//                                   <div class='comment-form__actions'>
//                                       <input type='submit' name='comment-submit' class='button button--confirm' value='Comment'>
//                                       <input type='button' name='comment-cancel' class='button button--light cancel' value='Cancel'>
//                               </form>
//                           </div>
//                       </div>
//                   </div>
//                   </div>";
//    }
//}else{
//    $posts.= "<div class='post'>
//                   <div class='comment-form'>
//                       <form method='post' action='../actions/add_comment_action.php'>
//                           <div class='comment-form__avatar'></div>
//                           <label for='comment-content'>
//                                <textarea name='comment-content' id='comment-content'></textarea>
//                           </label>
//                                <div class='comment-form__actions'>
//                                    <input type='submit' name='comment-submit' class='button button--confirm' value='Comment'>
//                                    <input type='button' name='comment-cancel' class='button button--light cancel' value='Cancel'>
//                       </form>
//                                </div>
//                   </div>
//               </div>";
//}

// get the comments for this user from the database
// retrieve the replies for each comment
// display the comments and replies

