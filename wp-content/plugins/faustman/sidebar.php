<div id="side">
<?php include_once('wp-includes/php-twitter/class.twitter.php');

$odd = ' class="odd"';

echo "<div id=\"twitter\">\n";
echo "<h4><a href=\"http://twitter.com/faustman\">Twitter: from me</a></h4>";
$data = $t->userTimeline();
echo "<ul>\n";
foreach($data as $tweet) {
	$odd = ( $odd==' class="odd"' ? '' : ' class="odd"');
	$text = htmlspecialchars($tweet->text);
	$text = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" rel=\"nofollow\">\\0</a>", $text); /* Creates links out of URLs in $text */
	$text = preg_replace("/@([a-z0-9_]+)/i", "@<a href=\"http://twitter.com/$1\">$1</a>", $text);
	$date = date('g:i A M j', strtotime($tweet->created_at)); /* Creates links out of @screen_name in $text */

	echo "<li$odd>" . $text . "<cite><a href=\"http://twitter.com/" . $tweet->user->screen_name . "/statuses/" . $tweet->id . "\">" . $date . "</a> from " . $tweet->source . "</cite></li>\n";
}
echo "</ul>\n";

echo "<h4><a href=\"http://twitter.com/faustman\">Twitter: to me</a></h4>";
$data = $t->getReplies();
echo "<ul>\n";
foreach($data as $mention) {
	$odd = ( $odd==' class="odd"' ? '' : ' class="odd"');
	$text = htmlspecialchars($mention->text);
	$text = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" rel=\"nofollow\">\\0</a>", $text); /* Creates links out of URLs in $text */
	$text = preg_replace("/@([a-z0-9_]+)/i", "@<a href=\"http://twitter.com/$1\">$1</a>", $text); /* Creates links out of @screen_name in $text */
	$date = date('g:i A M j', strtotime($mention->created_at));
	
	echo "<li$odd><a href=\"http://twitter.com/" . $mention->user->screen_name . "\">" . $mention->user->screen_name . "</a> " . $text . "<cite><a href=\"http://twitter.com/" . $mention->user->screen_name . "/statuses/" . $mention->id . "\">" . $date . "</a> from " . $mention->source . "</cite></li>\n";
}
echo "</ul>\n";
echo "</div>\n";
?>
<div id="flickr">
<h4><a href="http://www.flickr.com/photos/jonfaustman/" title="My Flickr Photostream">Flickr Photostream</a></h4>
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=30578898%40N06"></script>
</div>
</div>