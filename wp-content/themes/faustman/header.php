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
        <title><?php wp_title('&ndash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/static/img/favicon.ico">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/jonfaustman">
        <link rel="openid.server" href="http://www.myopenid.com/server">
        <link rel="openid.delegate" href="http://faustman.myopenid.com/">
        <link rel="profile" href="http://microformats.org/profile/hcard">
        <meta name="google-site-verification" content="mxS1_rLlu9KA_o9-R1T8fytd76b5IuS5YSQGF2tCFio" />
        <meta name="description" content="Jonathan Faustman is a front-end web developer, web standards enthusiast, espouser of accessibility compliance, and all around good guy.">
        <?php
        if (is_page('361')) {
            echo '<meta name="robots" content="noindex, nofollow">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/static/css/imagemakers.css" type="text/css" media="screen">'."\n".
            '<!--[if IE]>'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/static/css/imagemakers-ie.css" type="text/css" media="screen">'."\n".
            '<![endif]-->'."\n";
        }
        if (is_page('422')) {
            echo '<meta name="robots" content="noindex, nofollow">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/static/css/web-director.css" type="text/css" media="screen">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/static/css/web-director.print.css" type="text/css" media="print">'."\n";
        }
        if (is_page('407')) {
            echo '<style type="text/css">#content{width: 819px} #side{display: none} table tr:nth-child(2n+1){background-color: #161616}</style>'."\n";
        }
        ?>
        <script src="http://s.diaf.co/uv/djfrontend/js/modernizr/2.6.2/modernizr.min.js"></script>
    </head>
<body <?php body_class(); ?>>
<div id="wrapper">

    <header class="header sections">
        <nav class="nav">
            <a href="#content" class="nav__link--skip" id="skip-link" title="Skip to main content">Skip to main content</a>
            <a href="<?php get_bloginfo('url'); ?>" class="nav__link--logo">Jon Faustman</a>
            <a href="<?php echo $url.'/"'; echo 'class="', ((is_home()) ? 'nav__link nav__link--home nav__link--active"' : 'nav__link nav__link--home"'); ?>>Home</a>
            <a href="<?php echo $url.'/about/"'; echo 'class="', ((is_page(About)) ? 'nav__link nav__link--about nav__link--active"' : 'nav__link nav__link--about"'); ?>>About</a>
            <a href="<?php echo $url.'/archive/"'; echo 'class="', ((is_page(Archive)) ? 'nav__link nav__link--archive nav__link--active"' : 'nav__link nav__link--archive"'); ?>>Archive</a>
            <a href="http://hire.jonfaustman.com/" class="nav__link nav__link--hire">Resume</a>
            <?php get_search_form(); ?>
        </nav>
    </header>
