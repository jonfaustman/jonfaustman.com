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
        <h1 class="article__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

        <div class="article__content entry">
            <?php the_content(); echo "\n"; ?>
        </div><!-- /article__content -->
    </article>
    <?php endwhile; ?>

    <?php else : ?>

    <h1>Not Found</h1>

    <p>Sorry, but you are looking for something that isn't here.</p>

    <?php endif; ?>
</section>

<?php
    if (is_page('361') OR is_page('422')) {
        include_once('wp-content/themes/faustman/sidebar-imagemakers.php');
    }
?>
<?php get_footer(); ?>
