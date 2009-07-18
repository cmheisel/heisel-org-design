<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div class="comments">
<h4>Comments</h4>
    <?php if ( have_comments() ) : ?>
        <?php foreach( $comments as $comment ) : ?>
            <h5 id="comment-<?php echo comment_ID(); ?>">
                <?php echo comment_author_link(); ?> &ndash; <?php comment_date('F j, Y'); ?>
                <a href="#comment-<?php echo comment_ID(); ?>">#</a>
            </h5>
            <?php comment_text(); ?> 
        <?php endforeach; ?>
    <?php endif; ?>
</div>



<?php if ( comments_open() ) : ?>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
        <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
            <?php if ( is_user_logged_in() ) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
            <?php else : ?>
                <p>
                <label for="comment_name">Name</label><br>
                <input type="text" class="text" id="comment_name" name="author" value="<?php echo esc_attr($comment_author); ?>">
                </p>

                <p>
                <label for="url">URL</label><br />
                <input type="text" class="text" id="url" name="url" value="<?php echo esc_attr($comment_author_url); ?>">
                </p>
            <?php endif; ?>

            <p>
            <label for="comment">Comment</label><br>
            <textarea id="comment" name="comment" cols="20" rows="5"></textarea>
            </p>

            <p>
            <input type="submit" class="submit" value="Comment">
            </p>
            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>
            
        </form>
    <?php endif; ?>
<?php endif; // if you delete this the sky will fall on your head ?>
