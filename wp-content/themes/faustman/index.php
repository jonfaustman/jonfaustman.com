<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<section id="content">
<?php if (have_posts()) : ?>

<?php
    while (have_posts()) : the_post();
    if (has_excerpt()) :
?>
    <a href="<?php the_permalink(); ?>">
        <article <?php post_class('article') ?> id="post-<?php the_ID(); ?>">
            <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i></time>

            <h1 class="article__title"><?php the_title(); ?></h1>

            <div class="article__content">
                <?php the_excerpt(); ?>
            </div><!-- /article__content -->
        </article>
    </a>
<?php else : ?>
    <article <?php post_class('article') ?> id="post-<?php the_ID(); ?>">
        <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i></time>

        <h1 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <div class="article__content">
            <?php the_content(""); ?>
        </div><!-- /article__content -->
    </article>
<?php
    endif;
    endwhile; 
?>

<?php wp_pagenavi(); ?>

<?php else : ?>
    <h2>Not Found</h2>

    <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</section>

<?php get_footer(); ?>
