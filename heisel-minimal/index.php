<?php get_header(); ?>

<?php $posts_query = new WP_Query('cat=-2&posts_per_page=1')?>
<?php if($posts_query->have_posts()) : ?>
    <h4><a href="<?php bloginfo('home'); ?>/<?php the_time('Y')?>/">Posts &raquo;</a></h4>
<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>