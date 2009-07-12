<?php get_header(); ?>

<!-- POSTS -->
<?php $posts_query = new WP_Query('cat=-2&posts_per_page=1')?>
<?php if($posts_query->have_posts()) : ?>
    <h4><a href="<?php bloginfo('home'); ?>/<?php the_time('Y')?>/">Posts &raquo;</a></h4>
<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>

<!-- TWITTER -->
<?php if(function_exists('twitter_messages')): ?>
<h4><a href="http://twitter.com/cmheisel">Twitter &raquo;</a></h4>
<p><?php twitter_messages('cmheisel', 1, false, false, '&raquo;', true, true, false)?></p>
<?php endif;?>

<!-- BLOGMARKS -->
<?php
    $today = getdate();
    //$links_query = new WP_Query('cat=2&year=' .$today["year"] .'&monthnum=' .$today["mon"] .'&day=' .$today["mday"] );
    $links_query = new WP_Query('cat=2&posts_per_page=5&year=' .$today["year"] .'&monthnum=' .$today["mon"]);
?>
<?php if($links_query->have_posts()) : ?>
    <?php
    $category_id = get_cat_ID('Blogmarks');
    $category_link = get_category_link($category_id);
    ?>
    <h4><a href="<?php echo $category_link; ?>">Blogmarks &raquo;</a></h4>
<?php while ( $links_query->have_posts() ) : $links_query->the_post(); ?>
    
    <?php
    $post_custom = get_post_custom();
    ?>
    <p>
        <a href="<?php echo $post_custom["postalicious_href"][0] ?>" title="Original post"><?php echo $post_custom['postalicious_title'][0] ?></a> &ndash; <?php echo $post_custom['postalicious_description'][0] ?> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">&raquo;</a>
    </p>
<?php endwhile; ?>
<?php endif; ?>

<!-- CODE -->
<h4><a href="http://github.com/cmheisel/">Code &raquo;</a></h4>
<ul>
<?php
    $args = array(
        'category_name' => "Code",
        'title_li' => '',
        'title_before' => '',
        'title_after' => '',
        'categorize' => 0,
        'show_description' => 1,
        'between' => ' &ndash; ', 
    );
    wp_list_bookmarks($args);
?>
</ul>

<!-- CODE -->
<h4>Elsewhere</h4>
<ul>
<?php
    $args = array(
        'category_name' => "Elsewhere",
        'title_li' => '',
        'title_before' => '',
        'title_after' => '',
        'categorize' => 0,
        'show_description' => 1,
        'between' => ' &ndash; ', 
    );
    wp_list_bookmarks($args);
?>
</ul>

<?php get_footer(); ?>