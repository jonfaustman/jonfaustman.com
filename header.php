<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('&ndash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>/static/img/favicon.ico">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/jonfaustman">
        <link rel="openid.server" href="http://www.myopenid.com/server">
        <link rel="openid.delegate" href="http://faustman.myopenid.com/">
        <link rel="profile" href="http://microformats.org/profile/hcard">
        <meta name="google-site-verification" content="mxS1_rLlu9KA_o9-R1T8fytd76b5IuS5YSQGF2tCFio" />
        <meta name="description" content="<?php echo ((is_single()) && (has_excerpt()) ? strip_tags(get_the_excerpt()) : get_bloginfo('description')); ?>">
        <?php
        if (is_page('407')) {
            echo '<style type="text/css">#content{width: 819px} #side{display: none} table tr:nth-child(2n+1){background-color: #161616}</style>'."\n";
        }
        ?>
    </head>
<body <?php body_class(); ?>>
<div id="wrapper">

    <header class="header sections">
        <nav class="nav">
            <a href="#content" class="nav__link--skip" id="skip-link" title="Skip to main content">Skip to main content</a>
            <a href="<?php echo get_bloginfo('url'); ?>" class="nav__link--logo">Jon Faustman</a>
            <a href="<?php echo get_bloginfo('url') ,'" class="', ((is_home()) ? 'nav__link nav__link--home nav__link--active' : 'nav__link nav__link--home'); ?>">Home</a>
            <a href="<?php echo site_url('/about/'); ?>" class="<?php echo ((is_page('About')) ? 'nav__link nav__link--about nav__link--active' : 'nav__link nav__link--about'); ?>">About</a>
            <a href="<?php echo site_url('/articles/'); ?>" class="<?php echo ((is_single()) || (is_page('Articles')) ? 'nav__link nav__link--articles nav__link--active' : 'nav__link nav__link--articles'); ?>">Articles</a>
            <a href="http://hire.jonfaustman.com/" class="nav__link nav__link--hire">Resume</a>
            <?php get_search_form(); ?>
        </nav>
    </header>
