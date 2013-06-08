<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */
?>

<div id="footer">

<?php
if (is_page('361') OR is_page('422'))
{
echo '<p>Copyright &copy; 2009+ Jon Faustman. Views expressed are purely my own.</p>'."\n";
}
else
{
echo '<p>Copyright &copy; 2009+ Jon Faustman. Views expressed are purely my own, and maybe that crazy dude on the corner. Reppin&rsquo; <a href="http://wordpress.org/">WordPress</a>.</p>'."\n";
}
?>

</div>

</div>
<?php
if (is_page('361') OR is_page('422'))
{
echo '<script type="text/javascript" src="http://dnn506yrbagrg.cloudfront.net/pages/scripts/0009/0017.js"></script>'."\n";
}
else
{
echo  '<!--<script type="text/javascript" src="http://readernaut.com/api/v1/json/faustman/books/reading/?callback=parseResponse"></script>-->'."\n";
}
?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5638086-1']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>