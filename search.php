<?php get_header(); ?>

<section id="content" class="sections">
    <h1>Search</h1>
    
<?php 
    if (have_posts()) :
    while (have_posts()) : the_post();
?>
    <a href="<?php the_permalink(); ?>" class="article">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h2 class="article__title"><?php the_title(); ?></h2>
            
            <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i><i class="article__date--year"><?php the_time('Y'); ?></i></time>

            <div class="article__content">
                <?php the_excerpt(); ?>
            </div><!-- /article__content -->
        </article>
    </a>
<?php 
    endwhile;
    else :
?>
    <h2>Not Found</h2>

    <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</section>

<?php get_footer(); ?>
