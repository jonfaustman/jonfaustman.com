<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */
?>
<div id="side">

<?php include_once('wp-includes/php-twitter/class.twitter.php');

$odd = ' class="odd"';

echo '<div id="twitter">'."\n\n";
echo '<h2><a href="http://twitter.com/faustman/">What I&rsquo;m saying</a></h2>',"\n\n";
$data = $t->userTimeline();
echo '<ul>'."\n";
foreach($data as $tweet) {
	$odd = ( $odd==' class="odd"' ? '' : ' class="odd"');
	$text = htmlspecialchars($tweet->text);
	$text = ereg_replace('[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]', '<a href="\\0" rel="nofollow">\\0</a>', $text); /* Creates links out of URLs in $text */
	$text = preg_replace('/@([a-z0-9_]+)/i', '@<a href="http://twitter.com/$1\">$1</a>', $text);
	$date = date('g:i A M j', strtotime($tweet->created_at)); /* Creates links out of @screen_name in $text */

	echo '<li'.$odd.'>' . $text . '<cite><a href="http://twitter.com/' . $tweet->user->screen_name . '/statuses/' . $tweet->id . '">' . $date . '</a> from ' . $tweet->source . '</cite></li>'. "\n";
}
echo '</ul>'. "\n\n";

echo '<h2><a href="http://twitter.com/faustman/">What people are saying to me</a></h2>'."\n\n";
$data = $t->getReplies();
echo '<ul>'. "\n";
foreach($data as $mention) {
	$odd = ( $odd==' class="odd"' ? '' : ' class="odd"');
	$text = htmlspecialchars($mention->text);
	$text = ereg_replace('[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]', '<a href="\\0\" rel="nofollow">\\0</a>', $text); /* Creates links out of URLs in $text */
	$text = preg_replace('/@([a-z0-9_]+)/i', '@<a href="http://twitter.com/$1">$1</a>', $text); /* Creates links out of @screen_name in $text */
	$date = date('g:i A M j', strtotime($mention->created_at));
	
	echo '<li'.$odd.'><a href="http://twitter.com/' . $mention->user->screen_name . '">' . $mention->user->screen_name . '</a> ' . $text . '<cite><a href="http://twitter.com/' . $mention->user->screen_name . '/statuses/' . $mention->id . '">' . $date . '</a> from ' . $mention->source . '</cite></li>'. "\n";
}
echo '</ul>'. "\n\n";
echo '</div>'. "\n";
?>

<div id="readernaut">

<h2><a href="http://readernaut.com/faustman/">What I&rsquo;m reading</a></h2>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/readernaut.js"></script>

</div>

<div id="flickr">

<h2><a href="http://flickr.com/jonfaustman/">What I&rsquo;m seeing</a></h2>

<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=30578898%40N06"></script>

</div>

</div>
