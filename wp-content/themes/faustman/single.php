<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */

get_header(); ?>

<section id="content">

    <?php /** Comment out Google Adsense for now
    /*  <script type="text/javascript"><!--
    /*  google_ad_client = "ca-pub-4502909301189493";
    /*  /* Default */
    /*  google_ad_slot = "7581999967";
    /*  google_ad_width = 728;
    /*  google_ad_height = 90;
    /*  //-->
    /*  </script>
    /*  <script type="text/javascript"
    /*  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    /*  </script>
    **/ ?>

<?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('article') ?> id="post-<?php the_ID(); ?>">
        <time class="article__date date" pubdate datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time('M') ?><i class="article__date--day"><?php the_time('j') ?></i></time>

        <h1 class="article__title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

        <div class="article__content entry">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </div><!-- /article__content -->
    </article>
    <?php endwhile; ?>

    <?php else : ?>
        <h1>Not Found</h1>

        <p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>

    <?php /** Comment out Google Adsense for now
    /*  <script type="text/javascript"><!--
    /*  google_ad_client = "ca-pub-4502909301189493";
    /*  /* Default */
    /*  google_ad_slot = "7581999967";
    /*  google_ad_width = 728;
    /*  google_ad_height = 90;
    /*  //-->
    /*  </script>
    /*  <script type="text/javascript"
    /*  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    /*  </script>
    **/ ?>

</section>

<?php get_footer(); ?>
