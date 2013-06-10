<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

<div class="date"><?php the_time('M') ?><strong><?php the_time('j') ?></strong></div>

<div class="comments"><?php comments_popup_link('None', '1', '%', 'comments-link', 'Off'); ?></div>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="entry">

<?php the_content("&hellip;continue " . get_the_title('', '', false)); echo "\n"; ?>

</div>

</div>

<?php endwhile; ?>

<div class="navigation">

<?php posts_nav_link(' &ndash; ', '&laquo; Newer ramblings', 'Older ramblings &raquo;'); echo "\n"; ?>

</div>

<?php else : ?>

<h2>Not Found</h2>
<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
