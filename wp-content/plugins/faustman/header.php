<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title('-', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="Jonathan Faustman is a front-end web developer, web standards enthusiast, espouser of accessibility compliance, and all around good guy." />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<link rel="openid.server" href="http://www.myopenid.com/server" />
<link rel="openid.delegate" href="http://faustman.myopenid.com/" />
</head>
<body>
<div id="wrapper">
<div id="header">
<a href="#content" title="Skip to main content" id="skip-link">Skip to main content</a>
<?php
$url = get_bloginfo('url');
$name = get_bloginfo('name');
if (is_home()) {
	echo "<h1><a href=\"$url/\">$name<span>Web Developer.Blogger.Human.</span></a></h1>";
} else {
	echo "<p><a href=\"$url/\">$name<span>Web Developer.Blogger.Human.</span></a></p>";
}
?>
<div id="nav">
<ul>
<li><a href="<?php echo "$url/"; echo "\">"; if (is_home()) { echo "<strong>Home</strong><span>On the range.</span>"; } else { echo "Home<span>On the range.</span>"; } ?></a></li>
<li><a href="<?php echo "$url/about/"; echo "\">"; if (is_page(About)) { echo "<strong>About</strong><span>Who the?</span>"; } else { echo "About<span>Who the?</span>"; } ?></a></li>
<li><a href="<?php echo "$url/contact/"; echo "\">"; if (is_page(Contact)) { echo "<strong>Contact</strong><span>Ding, dong.</span>"; } else { echo "Contact<span>Ding, dong.</span>"; } ?></a></li>
</ul>
</div>
</div>
<div id="content-wrapper">
<a name="content"></a><div id="content">