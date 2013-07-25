<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<section id="content" class="sections">
<?php if (have_posts()) : ?>

<?php
    while (have_posts()) : the_post();
    if (has_excerpt()) :
?>
    <a href="<?php the_permalink(); ?>" class="article">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1 class="article__title"><?php the_title(); ?></h1>
            
            <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i><i class="article__date--year"><?php the_time('Y'); ?></i></time>

            <div class="article__content lead">
                <?php the_excerpt(); ?>
            </div><!-- /article__content -->
        </article>
    </a>
<?php else : ?>
    <article <?php post_class('article'); ?> id="post-<?php the_ID(); ?>">
        <h1 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        
        <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i><i class="article__date--year"><?php the_time('Y'); ?></i></time>

        <div class="article__content">
            <?php the_content(""); ?>
        </div><!-- /article__content -->
    </article>
<?php
    endif;
    endwhile; 
?>

<?php else : ?>
    <h2>Not Found</h2>

    <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</section>

<?php wp_pagenavi(); ?>

<?php get_footer(); ?>
