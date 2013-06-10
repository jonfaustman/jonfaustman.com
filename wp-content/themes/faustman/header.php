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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds2.feedburner.com/jonfaustman">
<link rel="openid.server" href="http://www.myopenid.com/server">
<link rel="openid.delegate" href="http://faustman.myopenid.com/">
<meta name="description" content="Jonathan Faustman is a front-end web developer, web standards enthusiast, espouser of accessibility compliance, and all around good guy.">
<?php
if (is_page('Imagemakers, hire me'))
{
	echo '<meta name="robots" content="noindex, nofollow">'."\n".
	'<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/imagemakers.css" type="text/css" media="screen">'."\n".
	'<!--[if IE]>'."\n".
	'<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/imagemakers-ie.css" type="text/css" media="screen">'."\n".
	'<![endif]-->'."\n".
	'<link rel="profile" href="http://microformats.org/profile/hcard">'."\n";
}
if (is_page('422')) // KSU Web Director
{
	echo '<meta name="robots" content="noindex, nofollow">'."\n".
	'<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/web-director.css" type="text/css" media="screen">'."\n".
	'<link rel="stylesheet" href="/wp-content/themes/faustman/assets/css/web-director.print.css" type="text/css" media="print">'."\n".
	'<link rel="profile" href="http://microformats.org/profile/hcard">'."\n";
}
if (is_page('Konnichiwa, bitches'))
{
	echo '<style type="text/css">#content{width: 819px} #side{display: none} table tr:nth-child(2n+1){background-color: #161616}</style>'."\n";
}
?>
</head>
<body>
<div id="wrapper">

<div id="header">

<a href="#content" id="skip-link" title="Skip to main content">Skip to main content</a>
<?php
$url = get_bloginfo('url');
if (is_home())
{
	echo '<h1><a href="'.$url.'/">Jon Faustman</a></h1>';
}
else
{
	echo '<div id="logo"><a href="'.$url.'/">Jon Faustman</a></div>';
}
	echo "\n";
?>

<ul id="nav">
<li><a href="<?php echo $url.'/">'; if (is_home()) { echo '<strong>Home</strong>'; } else { echo 'Home'; } ?></a></li>
<li><a href="<?php echo $url.'/about/">'; if (is_page(About)) { echo '<strong>About</strong>'; } else { echo 'About'; } ?></a></li>
<li><a href="<?php echo $url.'/contact/">'; if (is_page(Contact)) { echo '<strong>Contact</strong>'; } else { echo 'Contact'; } ?></a></li>
</ul>

<p>Hi! My name is Jon Faustman. I'm a front-end web developer currently living in Manhattan &ndash; no, not that one. I love turning beautiful mockups into functional websites using semantic web standards. I also really enjoy sarcasam and kittens. Not enough? <a href="<?php echo $url; ?>/about/">Find out more</a>.</p>

</div>
