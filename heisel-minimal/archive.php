<?php get_header(); ?>

<?php
global $wp_query;
query_posts(
	array_merge(
		array('cat' => "-2"),
		$wp_query->query
	)
);
?>

<?php if(have_posts()) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h4><a href="<?php bloginfo('home'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/" title="More in <?php the_time('F'); ?>"><?php the_date("F j, Y"); ?></a></h4>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>