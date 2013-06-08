<?php

remove_filter ('the_content', 'wpautop'); //disable auto p

// define the comments section
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

<div id="comment-<?php comment_ID(); ?>">

<div class="comment-author vcard">
<?php echo get_avatar($comment,$size='60',$default='http://jonfaustman.com/wp-content/themes/faustman/assets/images/gravatar.gif' ); echo "\n"; ?>

</div>

<?php if ($comment->comment_approved == '0') : ?>
<p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
<?php endif; ?>
<?php comment_text() ?>

<cite class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__(' %2$s %1$s'), get_comment_date(),  get_comment_time()) ?></a> from <?php printf(__('%s'), get_comment_author_link()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?></cite>

</div>
<?php
}

?>
