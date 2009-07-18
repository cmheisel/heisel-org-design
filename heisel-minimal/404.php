<?php get_header(); ?>

<h2>404</h2>

<?php

    $quotes = array(
        '"Instead of thinking about what you\'re missing, try thinking about what you have that everyone else is missing."',
        '"I\'m not a complete idiot, some parts are missing"',
        '"Don\'t be afraid of missing opportunities. Behind every failure is an opportunity somebody wishes they had missed." &mdash; Lily Tomlin',
        '"Have you ever watched a crab on the shore crawling backward in search of the Atlantic Ocean, and missing? That\'s the way the mind of man operates." &mdash; H. L. Mencken'
    );
    $choice = array_rand($quotes);
?>
<p><?php echo $quotes[$choice]; ?></p>

<?php get_footer(); ?>