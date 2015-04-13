<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/bootstrap.css
 * 2. /theme/assets/css/bootstrap-responsive.css
 * 3. /theme/assets/css/app.css
 * 4. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/js/vendor/modernizr-2.6.2.min.js  (in head.php)
 * 2. jquery-1.8.2.min.js via Google CDN              (in head.php)
 * 3. /theme/assets/js/plugins.js
 * 4. /theme/assets/js/main.js
 */

function khabar_scripts() {

   //wp_enqueue_style('roots_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', false, null);
  // wp_enqueue_style('roots_bootstrap_responsive', get_template_directory_uri() . '/assets/css/bootstrap-responsive.css', array('roots_bootstrap'), null);

  // wp_enqueue_style('roots_bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.css', false, null);
  // wp_enqueue_style('roots_bootstrap_responsive', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap-responsive.css', array('roots_bootstrap'), null);

  // wp_enqueue_style('roots_app', get_template_directory_uri() . '/assets/css/app.css', false, null);
  //wp_enqueue_style('Font-Awesome', get_stylesheet_directory_uri() . '/assets/fa/css/font-awesoe.min.css', false, null);

  if ( is_child_theme() ) {
    // ##
    //    grab child theme specific css
    // ##
    // wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
    // add some web fonts here if you'd like
    // wp_enqueue_style('gfont_monoton', 'http://fonts.googleapis.com/css?family=Monoton', false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.

  wp_enqueue_script( 'BJLL', plugins_url( '/js/combined.min.js', realpath(dirname(__FILE__) . '/../../../plugins/bj-lazy-load/bj-lazy-load.php') ), array( 'jquery','bootstrap' ), '0.7.3', true );

  if ( !is_admin() ) {


    // wp_deregister_script( 'jquery' );

    // wp_deregister_script( 'jquery-migrate' );
    // return;

    // wp_deregister_script( 'devicepx' );
    wp_deregister_script( 'shortcodes-ultimate' );
    wp_deregister_script( 'shortcodes-ultimate-admin' );
    wp_deregister_script( 'shortcodes-ultimate-generator' );
    wp_deregister_script( 'nivo-slider' );
    wp_deregister_script( 'jcarousel' );
    wp_deregister_script( 'codemirror' );
    wp_deregister_script( 'codemirror-css' );
    wp_deregister_script( 'chosen' );
    wp_deregister_script( 'ajax-form' );
    wp_deregister_script( 'jwplayer' );
    wp_deregister_script( 'comment-reply' );

  }

  if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/plugins.js', false, null, false);
  // wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/main.js', false, null, false);
  // wp_enqueue_script( 'roots_plugins' );
  // wp_enqueue_script('roots_main');

  if ( is_child_theme() ) {
    // ##
    //    grab child theme specific js
    // ##
    // wp_register_script('child_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, false);
    // register other custom scripts here...

    // wp_enqueue_script('roots_plugins');
    // wp_enqueue_script('child_main');


    wp_dequeue_script( 'shutter' );
    wp_dequeue_script( 'jquery-cycle' );
    wp_dequeue_script( 'ngg-slideshow' );

  }

  // Enqueue scripts front-end
  // function add_myplugin_scripts() {
  // }

}

function khabar_styles() {
  if ( !is_admin() ) {

    if ( APPLICATION_ENV != 'production' ) {
      wp_enqueue_style( 'khabar_bootstrap', get_stylesheet_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css', false, null );
      wp_enqueue_style( 'khabar_bootstrap_responsive', get_stylesheet_directory_uri(). '/assets/bootstrap/css/bootstrap-responsive.min.css', false, null );
      wp_enqueue_style( 'khabar_fa', get_stylesheet_directory_uri(). '/assets/fa/css/font-awesome.min.css', false, null );
    }
    else {
      wp_enqueue_style( 'khabar_bootstrap', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css', false, null );
      wp_enqueue_style( 'khabar_fa', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', false, null );
    }
    wp_enqueue_style( 'khbar_app', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null );


    wp_deregister_style( 'shortcodes-ultimate' );
    wp_deregister_style( 'shortcodes-ultimate-admin' );
    wp_deregister_style( 'shortcodes-ultimate-generator' );
    wp_deregister_style( 'nivo-slider' );
    wp_deregister_style( 'jcarousel' );
    wp_deregister_style( 'codemirror' );
    wp_deregister_style( 'codemirror-css' );
    wp_deregister_style( 'chosen' );

    wp_deregister_style( 'contact-form-7' );
    wp_deregister_style( 'NextGEN' );
    wp_deregister_style( 'shutter' );
    wp_deregister_style( 'jetpack-widgets' );

  }
}
add_action( 'wp_print_styles', 'khabar_styles', 100 );
add_action( 'wp_enqueue_scripts', 'khabar_scripts', 100 );
