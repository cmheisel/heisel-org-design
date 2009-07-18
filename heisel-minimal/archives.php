<?php get_header(); ?>

<h4>By subject</h4>
	<ul>
		 <?php
		    $args = array('title_li' => '');
		    wp_list_categories( $args ); 
		 ?>
	</ul>

<?php get_footer(); ?>