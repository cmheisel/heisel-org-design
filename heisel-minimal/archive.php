<?php get_header(); ?>

<?php
global $wp_query;
query_posts(
	array_merge(
		array('cat' => "-2", "posts_per_page" => "10"),
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

<p>
    <strong><?php next_posts_link('&laquo; Older entries'); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php previous_posts_link('Newer entries &raquo;'); ?></strong>
</p>

<?php get_footer(); ?>