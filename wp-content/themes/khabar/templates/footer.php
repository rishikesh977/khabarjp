<footer class="container" id="content-info" role="contentinfo">
  <div class="container-wrap">
    <div class="row">
      <div class="span4">
        <div class="association">
          <small class="muted">
            In Association With
          </small>
          <a href="http://namastenippon.com/" target="_blank">
            <img alt="" src="<?php echo get_stylesheet_directory_uri()?>/assets/brands/namaste1.png">
          </a>
        </div>
        <small class="copy">
          ©
          <?php echo date('Y'); ?>
          Khabar.jp
        </small>
      </div>
      <div class="span8">
        <div class="navbar">
          <div class="clearfix">
            <?php if (has_nav_menu('primary_footer_navigation')):?>
            <?php wp_nav_menu(array('theme_location' => 'primary_footer_navigation', 'menu_class' => 'nav pull-right'));?>
            <?php endif?>
          </div>
          <div class="clearfix">
            <ul class="nav pull-right">
              <li>
                <a href="https://twitter.com/khabarJP">
                  <i class="icon-twitter"></i>
                  @khabarJP
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/khabar.jp">
                  <i class="icon-facebook"></i>
                  khabar.jp
                </a>
              </li>
              <li>
                <a href="http://www.youtube.com/user/khabarJP">
                  <i class="icon-youtube"></i>
                  khabarJP
                </a>
              </li>
              <li>
                <a href="<?php bloginfo('rss2_url'); ?>">
                  <i class="icon-rss"></i>
                  RSS Feed
                </a>
              </li>
            </ul>
          </div>
        </div>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
    </div>
  </div>
</footer>
<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>
<?php wp_footer(); ?>
