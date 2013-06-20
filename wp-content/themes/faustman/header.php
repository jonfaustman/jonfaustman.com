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
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/jonfaustman">
        <link rel="openid.server" href="http://www.myopenid.com/server">
        <link rel="openid.delegate" href="http://faustman.myopenid.com/">
        <meta name="description" content="Jonathan Faustman is a front-end web developer, web standards enthusiast, espouser of accessibility compliance, and all around good guy.">
        <?php
        if (is_page('361')) {
            echo '<meta name="robots" content="noindex, nofollow">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/imagemakers.css" type="text/css" media="screen">'."\n".
            '<!--[if IE]>'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/imagemakers-ie.css" type="text/css" media="screen">'."\n".
            '<![endif]-->'."\n".
            '<link rel="profile" href="http://microformats.org/profile/hcard">'."\n";
        }
        if (is_page('422')) {
            echo '<meta name="robots" content="noindex, nofollow">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/web-director.css" type="text/css" media="screen">'."\n".
            '<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/web-director.print.css" type="text/css" media="print">'."\n".
            '<link rel="profile" href="http://microformats.org/profile/hcard">'."\n";
        }
        if (is_page('407')) {
            echo '<style type="text/css">#content{width: 819px} #side{display: none} table tr:nth-child(2n+1){background-color: #161616}</style>'."\n";
        }
        ?>
        <script src="http://s.diaf.co/uv/djfrontend/js/modernizr/2.6.2/modernizr.min.js"></script>
    </head>
<body>
<div id="wrapper">

    <header id="header">

        <a href="#content" id="skip-link" title="Skip to main content">Skip to main content</a>
        <?php
        $url = get_bloginfo('url');
        if (is_home()) {
            echo '<h1><a href="'.$url.'/">Jon Faustman</a></h1>';
        } else {
            echo '<div id="logo"><a href="'.$url.'/">Jon Faustman</a></div>';
        }
            echo "\n";
        ?>

        <nav id="nav">
            <a href="<?php echo $url.'/">'; if (is_home()) { echo '<strong>Home</strong>'; } else { echo 'Home'; } ?></a>
            <a href="<?php echo $url.'/about/">'; if (is_page(About)) { echo '<strong>About</strong>'; } else { echo 'About'; } ?></a>
            <a href="<?php echo $url.'/contact/">'; if (is_page(Contact)) { echo '<strong>Contact</strong>'; } else { echo 'Contact'; } ?></a>
        </nav>

        <p>Hi! My name is Jon Faustman. I'm a front-end web developer currently living in Manhattan &ndash; no, not that one. I love turning beautiful mockups into functional websites using semantic web standards. I also really enjoy sarcasam and kittens. Not enough? <a href="<?php echo $url; ?>/about/">Find out more</a>.</p>
    </header>
