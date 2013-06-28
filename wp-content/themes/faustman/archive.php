<?php
/**
 * @package WordPress
 * @subpackage Faustman
 * Template Name: Archives
 */

?>

<?php get_header(); ?>

<section id="content" class="sections">
    <h2>Archive</h2>
    
<?php
    if (have_posts()) :
        wp_get_archives( array( 'type' => 'postbypost', 'format' => 'custom', 'before' => '<h2>', 'after' => '</h2>' ) );
    else :
?>
    <h2>Not Found</h2>

    <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</section>

<?php get_footer(); ?>
