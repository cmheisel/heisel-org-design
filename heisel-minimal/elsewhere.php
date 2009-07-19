<?php
/**
Template Name: Elsewhere
**/
?>
<?php get_header(); ?>

<h2>Elsewhere</h2>
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