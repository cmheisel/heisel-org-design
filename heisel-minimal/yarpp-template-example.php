<?php if ($related_query->have_posts()):?>
<h4>Related</h4>
<ul>
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
</ul>
<?php endif; ?>
