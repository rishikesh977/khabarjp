<?php
	/**
	 * note: in child theme 
	 *  adding in funcitons.php dost work 
	 */
	if ( function_exists( 'sharing_display' ) ) 
	{
		remove_filter( 'the_content', 'sharing_display', 19 ); 
		remove_filter( 'the_excerpt', 'sharing_display', 19 ); 
	}
?>
<?php get_template_part('templates/content', 'single'); ?>