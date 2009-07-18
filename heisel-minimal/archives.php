<?php get_header(); ?>

<h4>By year</h4>
<ul>
	<?php wp_get_archives('type=yearly'); ?>
</ul>

<h4>By subject</h4>
	<ul>
		 <?php
		    $args = array('title_li' => '', 'exclude' => '2');
		    wp_list_categories( $args ); 
		 ?>
	</ul>

<?php get_footer(); ?>