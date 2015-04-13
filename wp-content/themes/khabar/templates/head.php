<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()?>/assets/img/common/favicon.ico" />
  <title>
    <?php
    wp_title('|', true, 'right');
    // bloginfo('name');
    ?>
  <?php
    // if(is_home()) {
    //   echo get_bloginfo("name")
    //   . " | "
    //   . get_bloginfo("description")
    //   ;
    // }
    // else
    // {
    //   echo wp_title(" | ", false, right);
    //   echo bloginfo("name");
    // }
  ?>

  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <script data-main="<?php echo get_stylesheet_directory_uri()?>/app/scripts/main.js" src="http://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.9/require.min.js"></script>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
