<?php
/*
Template Name: Test
*/
?>
<?php // get_template_part('templates/mails/guru')?>
<?php //get_template_part('templates/page', 'header'); ?>
<?
function dd__yy() {
  global $wpdb;

  $newest = $wpdb->get_row( "select UNIX_TIMESTAMP(post_modified_gmt) as post_modified_gmt from $wpdb->posts
where post_type in ('page', 'post') AND post_status = 'publish' ORDER BY post_modified_gmt DESC LIMIT 1" );
  return $newest->post_modified_gmt;

  // echo mysql2date('m/d/Y',$newest->post_modified);
}

function ago11(  ) {
  $periods = array('सेकेन्ड','मिनेट','घन्टा','दिन','सप्ताह','महिना','वर्ष');
  $lengths = array( '60', '60', '24', '7', '4.35', '12', '10' );

  // $now = time();
  // $gmt_time = new DateTime('now', new DateTimeZone('GMT'));
  // $now = $gmt_time->getTimestamp();
  // $now = current_time('timestamp');


  $difference = time()-dd__yy();


  $tense = 'अघि सम्पादित';

  for ( $j = 0; $difference >= $lengths[$j] && $j < count( $lengths )-1; $j++ ) {
    $difference /= $lengths[$j];
  }

  $difference = round( $difference );

  // if ( $difference != 1 ) {
  //   $periods[$j].= 's';
  // }

  return "$difference {$periods[$j]} {$tense} ";
}

?>
<dl>
  <dt>post time</dt>
  <dd>
    <?php echo dd__yy(), "::", date("m/d/y : H:i:s",dd__yy());?>
  </dd>
  <dt>current time</dt>
  <dd>
    <?php echo time(), "::", date("m/d/y : H:i:s", time());?>
  </dd>
</dl>
<hr>

<?php //echo time()-dd__yy()?>
<?php echo ago11()?>