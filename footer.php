<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PDS_Theme
 */

?>
    <div class="prefooter">
      <div class="inner">
        <address>620 N. Main Street<br>
          Belmont, NC 28012<br>
          704-825-4046<br>
          <a href="/contact/" alt="Contact Us">Contact Us</a>
        </address>
        <div class="prefooter__partners">
          <ul>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/charlotte-regional.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/gaston-regional.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/thrive.png"></li>
          </ul>
        </div>
      </div>
    </div>
    <footer>
      <div class="inner"><span class="footer__copyright">&copy; <?php echo date('Y'); ?> Gaston EDC</span><a class="footer__alter" href="http://alterimaging.com/" alt="Alter Imaging" target="_blank">
           Website Design by<img src="<?php bloginfo('stylesheet_directory'); ?>/img/alter-logo.png"></a></div>
    </footer>
    
    <?php wp_footer(); ?>

    <script type="text/javascript">
    var clicky_site_ids = clicky_site_ids || [];
    clicky_site_ids.push(100619699);
    (function() {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//static.getclicky.com/js';
      ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
    })();
    </script>
    <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100619699ns.gif" /></p></noscript>
    
  </body>
</html>
