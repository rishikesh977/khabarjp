<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php
          $custom_query = new WP_Query(array(
            'category_name' => 'videos',
            'tag' => 'sidebar-featured',
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
          ));

          if($custom_query->have_posts()) : 
            while($custom_query->have_posts()) : 
              $custom_query->the_post();
        ?>
        <div class='post-content'>
          <?php
            $pattern = '/youtube.com\/embed\/([a-zA-Z0-9-_]+)*/';
            preg_match($pattern, get_the_content(), $matches, PREG_OFFSET_CAPTURE, 3);
          ?>
          <h4 class="text-success"><?php echo the_title();?></h4>
          <?php if(isset($matches[0][0])):?>
              <iframe src="//<?php echo trim($matches[0][0]);?>?hd=1&rel=0&autohide=1&showinfo=0" class="sidebar_youtube" frameborder="0" width="100%" height="250">
              </iframe>
          <?php endif;?>
        </div>      
        <?php endwhile; ?>
        <?php endif; ?>

        <div id="election">
          <h3 class="title common">संविधानसभा</h3>
          <ul class="news-list">
            <?php
            $original_query = $wp_query;
            $wp_query = null;
            $args=array('posts_per_page' => 8, 'tag' => 'election');
            $wp_query = new WP_Query( $args );
            if ( have_posts() ) :
                while (have_posts()) : the_post();
            ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <?php the_title();?>
              </a>
            </li>  
            <?php
                endwhile;
            endif;
            $wp_query = null;
            $wp_query = $original_query;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
        
        <div >
          <img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/campaign/khabarcampaign20.jpg" >
          <!-- class="dd" data-spy="affix" data-offset-top="100" -->
          <?php include roots_sidebar_path(); ?>
          
        </div>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php get_template_part('templates/footer'); ?>
</body>
</html>