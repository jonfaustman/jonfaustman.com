<?php get_header(); ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="entry-page" id="post-<?php the_ID(); ?>">
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

<div class="post">
<?php the_content(); ?>

</div>
</div>

<?php endwhile; ?>

<?php else : ?>

<div class="post">
<h2><?php _e('Not Found'); ?></h2>
</div>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>