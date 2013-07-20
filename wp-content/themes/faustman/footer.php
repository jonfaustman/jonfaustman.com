<?php
/**
 * @package WordPress
 * @subpackage Faustman
 */
?>

    <footer class="footer sections">
        <h2 class="footer__heading--about">TL;DR about me</h2>
        
        <p class="footer__about">Hi! My name is Jon Faustman. I'm a front-end web developer currently living in Manhattan &ndash; no, not that one. I love turning beautiful mockups into functional websites using semantic web standards. I also really enjoy sarcasm and kittens. Not enough? <a href="<?php echo $url; ?>/about/">Find out more</a>.</p>
        
        <h2 class="footer__heading--social"><span class="del">Stalk</span> Find me at</h2>
        
        <ul class="footer__social">
            <li><a href="http://www.facebook.com/faustman">Facebook</a></li>
            <li><a href="http://flickr.com/jonfaustman/">Flickr</a></li>
            <li><a href="https://github.com/jonfaustman">GitHub</a></li>
            <li><a href="http://pinterest.com/Jonny2k1/">Pinterest</a></li>
            <li><a href="http://readernaut.com/faustman/">Readernaut</a></li>
            <li><a href="http://twitter.com/faustman/">Twitter</a></li>
        </ul>
        
        <p class="footer__copy">Copyright &copy; Jon Faustman.</p>
    </footer>
</div><!-- /wrapper -->

<script>
  var _gaq = _gaq || [];
  var pluginUrl = 
   '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-5638086-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
