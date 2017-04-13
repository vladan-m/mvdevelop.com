<?php // Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');
  if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
      ?>
      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
      <?php
      return;
    }
  }
  /* This variable is for alternating comment background */
  $oddcomment = 'class="alt" ';
?>
<?php if ($comments) : ?>
  <div id="comments" class="comments">
    <h3><?php comments_number('No Comments', '1 Comment', '% Comments' );?></h3>
    <?php $comment_cnt=0;?>
    <?php foreach ($comments as $comment) : ?>
    <?php $comment_type = get_comment_type(); ?>
    <?php if($comment_type=="comment") { ?>
    <?php $comment_cnt=$comment_cnt+1; ?>
    <div class="comment" id="comment-<?php comment_ID() ?>">
      <?php
        if( $comment->user_id > 0 ) {
          echo "<div class='admin-comment comment-block'>";
        } else {
          echo "<div class='user-comment comment-block'>";
        }
      ?>
        <div class="comment-info">
          <div class="comment-image">
            <?php echo get_avatar( $comment, 60 ); ?>
          </div>
          <div class="comment-author">
            <h5><?php comment_author_link() ?> <span><?php comment_date('F jS, Y') ?></span></h5>
            <?php if ($comment->comment_approved == '0') : ?>
              <?php _e("<strong>Your comment is awaiting moderation.</strong>"); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="comment-text">
          <?php comment_text() ?>
        </div>
        <div class="comment-counter">
          <?php _e($comment_cnt);?>
        </div>
      </div>
    </div>
    <?php } else { $trackback = true; } /* End of is_comment statement */ ?>
    <?php endforeach; /* end for each comment */ ?>
  </div> <!--/comments-->
   <!-- Start of TrackBack Code -->
      <?php if ($trackback == true) { ?>
        <div id="comments">
    <h4 id="comments">Trackbacks</h4>
      <div class="comment">
      <ol>
        <?php foreach ($comments as $comment) : ?>
          <?php $comment_type = get_comment_type();?>
          <?php if($comment_type != "comment") { ?>
            <li id="comment-<?php comment_ID() ?>">
            <div class="tcomment"><?php comment_author_link()?>
            <span style="color:#999999; text-transform:uppercase; font-family:arial; font-size:0.8em;">&nbsp;on&nbsp;<?php comment_date('F jS, Y') ?>&nbsp;@ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></span></div>
            </li>
          <?php } ?>
        <?php endforeach; ?>
      </ol>
      </div><!--/comment-->
    </div>
        <?php } ?>
     <!-- TrackBack Code Ends here -->
  <?php else : // this is displayed if there are no comments so far ?>
    <?php if ('open' == $post->comment_status) : ?>
     <?php else : // comments are closed ?>
     <div id="addcomment" style="padding:5px;">
     <p class="nocomments">Comments are closed.</p>
     </div>
    <?php endif; ?>
  <?php endif; ?>

  <?php if ('open' == $post->comment_status) : ?>
    <div id="addcomment" class="add-comment">
      <h3>Add a Comment</h3>
      <p class="note-message">All fields are required</p>
      <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
      <?php else : ?>

      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="blog-add-comment">
        <ul class="form-list">
        <?php if ( $user_ID ) : ?>
          <p class="submit-button">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
          <?php else : ?>

            <li class="row">
              <div class="col-sm-9">
                <input class="form-control required" type="text" name="author" value="" id="comment-name" placeholder="Your Name">
              </div>
            </li>
            <li class="row">
              <div class="col-sm-9">
                <input class="form-control required email" type="text" name="email" value="" id="comment-email" placeholder="Your Email Address (will be hidden)">
              </div>
            </li>
          <?php endif; ?>
            <li class="row">
              <div class="col-sm-11">
                <textarea class="form-control required" name="comment" id="comment" rows="8" placeholder="Put some words..."></textarea>
              </div>
            </li>
          </ul>

          <div class="submit-button">
            <input class="btn btn-info btn-custom" name="submit" type="submit" id="comment-submit" tabindex="5" value="Submit Comment">
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
          </div>

        <?php do_action('comment_form', $post->ID); ?></form>

        <?php endif; // If registration required and not logged in ?>
    </div><!--/addcomment-->
  <?php endif; // if you delete this the sky will fall on your head ?>
