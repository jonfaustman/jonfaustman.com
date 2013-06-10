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

<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

<div class="entry">

<?php the_content(); echo "\n"; ?>

</div>

</div>

<?php endwhile; ?>

<?php else : ?>

<h1>Not Found</h1>

<p>Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
</div>

<?php
if (is_page('361') OR is_page('422'))
{
	include_once('wp-content/themes/faustman/sidebar-imagemakers.php');
}
else if (is_page('Konnichiwa, bitches'))
{

}
else
{
	//get_sidebar();
}
?>
<?php get_footer(); ?>
