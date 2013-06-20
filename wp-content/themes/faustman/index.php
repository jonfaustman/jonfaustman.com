<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<section id="content">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('article') ?> id="post-<?php the_ID(); ?>">

        <time class="article__date date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i></time>

        <h1 class="article__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

        <div class="article__content entry">
            <?php the_content("&hellip;continue " . get_the_title('', '', false)); echo "\n"; ?>
        </div><!-- /article__content -->
    </article>
    <?php endwhile; ?>

<div class="navigation">
    <?php posts_nav_link(' &ndash; ', '&laquo; Newer ramblings', 'Older ramblings &raquo;'); echo "\n"; ?>
</div>

<?php else : ?>
    <h2>Not Found</h2>

    <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</section>

<?php get_footer(); ?>
