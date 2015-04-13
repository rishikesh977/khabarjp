<?php
/**
 * Roots child custom functions
 */
if ( function_exists( 'sharing_display' ) ) {
  remove_filter( 'the_content', 'sharing_display', 19 );
  remove_filter( 'the_excerpt', 'sharing_display', 19 );
}


// Show less info to users on failed login for security. (Won't let a valid username be known)
function show_less_login_info() {
  return "<strong>ERROR</strong>: What's wrong, don't remember? Try again...";
}

// Don't generate and display WordPress version
function no_generator() {
  return '';
}

add_filter( 'the_generator', 'no_generator' );
add_filter( 'login_errors', 'show_less_login_info' );

function roots_child_setup() {

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  // set_post_thumbnail_size( 9999, 250, false );
  //add_image_size('wide', 200, 200,true);
  // add_image_size('tall', 200);
  remove_filter( 'excerpt_more', 'roots_excerpt_more' );

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action( 'after_setup_theme', 'roots_child_setup' );

// override roots_excerpt_more
function roots_child_excerpt_more( $more ) {
  return '&hellip; <a class="btn btn-link" href="' . get_permalink() . '">' . __( 'बाँकी अंश »', 'roots_child' ) . '</a>';
}

add_filter( 'excerpt_more', 'roots_child_excerpt_more' );


/* site_last_updated
*
* This will check the modified_date of all published posts and give you the most recent date.
*
*/

add_action( 'wp_ajax_exchange_rate', 'get_exchange_rate' );
add_action( 'wp_ajax_nopriv_exchange_rate', 'get_exchange_rate' );


function get_exchange_rate() {
  include __DIR__ . '/templates/partial-exchange-rate.php';
  exit;
}

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

if(func)


if (function_exists('add_theme_support')){
  add_theme_support('post-thumbnails'); 
}
if (function_exists('add_image_size')){
  // add_image_size('featured',400,400,true);
  //add_image_size('featured-medium',200,200,true);
  add_image_size('thumbnail-medium',134,100,true);
  // add_image_size('front-thumb',340,300,true);
   //add_image_size('volunteer-pic',340,300,true);
   //add_image_size('about-pic',550,450,true);
  // add_image_size('chairperson-pic',550,350,true);  
}

// add_action( 'wp_ajax_alert_message', 'get_alert_message' );
// add_


function wpb_adding_scripts() {
wp_register_script('my_amazing_script', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'),'1.1', true);
wp_enqueue_script('my_amazing_script');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

function the_breadcrumb() {
  if (!is_home()) {
    
    echo '<a href="';
    echo bloginfo ('url');
    echo '">';
    echo "खबर";
    echo "</a> » ";
    if (is_category() || is_single()) {
      the_category('title_li=');
      if (is_single()) {
        echo " » ";
        the_title();
      }
    } elseif (is_page()) {
      echo the_title();
    }
  }
}