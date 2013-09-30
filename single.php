<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<section id="content" class="sections">

<?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('article'); ?> id="post-<?php the_ID(); ?>">
        <h1 class="article__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        
        <time class="article__date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i><i class="article__date--year"><?php the_time('Y') ?></i></time>
        
        <div class="article__content">
            <?php the_content(); ?>
        </div><!-- /article__content -->
    </article>
    <?php endwhile; ?>

    <?php else : ?>
        <h1>Not Found</h1>

        <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

    <div id="google-ads-2">
        <script type="text/javascript">
            adUnit   = document.getElementById("google-ads-2");
            adWidth  = adUnit.offsetWidth;
            google_ad_client = "ca-pub-5996049043771362";
            if ( adWidth >= 728 ) {
                google_ad_slot	= "5806617931";
                google_ad_width	= 728;
                google_ad_height 	= 90;
            } else {
                google_ad_slot 	= "8963403930";
                google_ad_width 	= 320;
                google_ad_height 	= 50;
            } 
        </script>
        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </div><!--/google-ads-2 -->
</section>

<?php get_footer(); ?>
