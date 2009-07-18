<?php get_header(); ?>

<h4>By subject</h4>
	<ul>
		 <?php
		    $args = array('title_li' => '');
		    wp_list_categories( $args ); 
		 ?>
	</ul>


<h4>By month</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>



<?php get_footer(); ?>