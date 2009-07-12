<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h4><a href="<?php bloginfo('home'); ?>/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/" title="More in <?php the_time('F'); ?>"><?php the_date("F j, Y"); ?></a></h4>

<h2><?php the_title(); ?></h2>

<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

<p><strong>Filed under:</strong> <?php the_category(','); ?></p>

<?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>