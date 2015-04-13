<?php if ( function_exists('yoast_breadcrumb') && !is_front_page()): ?>
<ol class="breadcrumb">
  <?php echo  yoast_breadcrumb( '<ul class="breadcrumb"><li>', '</li></ul>', false);?>
	
	
	<li>तपाई यहाँ हुनुहुन्छ » <?php the_breadcrumb(); ?></li>
</ol>
<?php endif;?>
