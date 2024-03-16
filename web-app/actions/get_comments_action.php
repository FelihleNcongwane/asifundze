<?php

include '../settings/connection.php';
global $conn;

session_start();

$user_id = $_SESSION['uid'];
$sql = "SELECT * FROM Discussions WHERE user_id = $user_id";

$result = $conn->query($sql);
$full_name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
$posts = "";
if($result->num_rows > 0) {
    // get the comment
    // get the replies to the comment
    // append all of them to one variable. The replies coming after the comment

    while ($row = $result->fetch_assoc()) {
        $comment_count = $result->num_rows;
        $comment = $row['post'];
        $comment_id = $row['id'];
        $comment_author = $full_name;
        $comment_time = $row['p_time'];
        $comment_likes = $row['likes'];
        $comment_dislikes = $row['dislikes'];

        $posts .= "<div class='post'>
                           <div class='post__avatar'></div>
                           <h3 class='post__author'>".$comment_author."</h3>
                           <h4 class='post__timestamp'>".$comment_time."</h4>
                           <p class='post__body'>".$comment."</p>
                           <div class='post__actions'>
                               <div class='button button--approve'>
                                   <i class='fa fa-thumbs-o-up'></i><i class='fa fa-thumbs-up solid'></i>
                               </div>
                               <div class='button button--deny'>
                                   <i class='fa fa-thumbs-o-down'></i><i class='fa fa-thumbs-down solid'></i>
                               </div>
                               <div class='button button--fill comment-trigger'>
                                   <span>Comment...</span>
                               </div>
                               <div class='button button--flag'>
                                   <i class='fa fa-comment-o'></i><i class='fa fa-comment solid'></i>2
                               </div>
                               <div class='post__comments'>
                                   <div class='comment-group'>";

        $sql = "SELECT * FROM Replies WHERE post_id = $comment_id";
        $replies = $conn->query($sql);

        if ($replies->num_rows > 0) {
            while ($reply = $replies->fetch_assoc()) {
                $reply_count = $replies->num_rows;
                $reply_time = $reply['p_time'];
                $reply_uid = $reply['user_id'];
                $reply_likes = $reply['likes'];
                $reply_content = $reply['post'];
                $reply_dislikes = $reply['dislikes'];

                $author_sql = "SELECT * FROM Users WHERE id = $reply_uid";
                $author = $conn->query($author_sql);
                $author = $author->fetch_assoc();

                $reply_author = $author['first_name'] . " " . $author['last_name'];
                $posts .= "<div class='post'>
                                   <div class='post__avatar comment__avatar'></div>
                                   <h3 class='post__author'>".$reply_author."</h3>
                                   <h4 class='post__timestamp'>".$reply_time."</h4>
                                   <p class='post__body'>".$reply_content."</p>
                               </div>";
            }
        }else{
            $posts .= "";
        }
        $posts .= "</div>
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
                   </div>
                   </div>";
    }
}else{
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

// get the comments for this user from the database
// retrieve the replies for each comment
// display the comments and replies

