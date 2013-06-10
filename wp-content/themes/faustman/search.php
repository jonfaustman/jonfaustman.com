<?php get_header(); ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="entry" id="post-<?php the_ID(); ?>">
<div class="date"><?php the_time('F') ?><strong><?php the_time('j') ?></strong></div>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="post">
<?php the_excerpt(); ?>

<div class="postmetadata">
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</div>
</div>
</div>

<?php endwhile; ?>

<div class="navigation">
<?php posts_nav_link(); ?>
</div>

<?php else : ?>

<div class="post">
<h2><?php _e('Not Found'); ?></h2>
</div>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>