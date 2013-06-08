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

<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>

<div class="postmetadata">
<?php comments_template(); ?>
</div>

</div>

</div>

<?php endwhile; ?>

<?php else : ?>

<h1>Not Found</h1>

<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
