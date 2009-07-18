<?php get_header(); ?>

<?php
global $wp_query;
query_posts(
	array_merge(
		array('cat' => -2),
		$wp_query->query
	)
);
?>

<?php if(have_posts()) : ?>
    
    <?php if( is_month() ): ?>
        <h3><?php the_time('F Y'); ?>
    <?php elseif( is_day() ): ?>
        <!-- pass -->
    <?php elseif( is_category() || is_archive() ): ?>
        <h3><?php wp_title('', true, ''); ?></h3>
    <?php endif ?>
    
    <?php while ( have_posts() ) : the_post(); ?>
        <?php if(!is_category('Blogmarks') || is_archive() ): ?>
            <h4><a href="<?php bloginfo('home'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/" title="More in <?php the_time('F'); ?>"><?php the_date("F j, Y"); ?></a></h4>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        <?php else: ?>
            <?php $post_custom = get_post_custom(); ?>
            <p>
                <a href="<?php echo $post_custom["postalicious_href"][0] ?>" title="Original post"><?php echo $post_custom['postalicious_title'][0] ?></a> &ndash; <?php echo $post_custom['postalicious_description'][0] ?> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">&raquo;</a>
            </p>
        <?php endif;?>
    <?php endwhile; ?>
<?php endif; ?>

<p>
    <strong><?php next_posts_link('&laquo; Older entries'); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php previous_posts_link('Newer entries &raquo;'); ?></strong>
</p>

<?php get_footer(); ?>