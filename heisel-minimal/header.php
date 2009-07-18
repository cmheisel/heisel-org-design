<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <title><?php wp_title('&mdash;', true, 'right'); ?> Chris Heisel</title>

        <meta http-equiv="Content-Type" content="text/html;charset=<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/print.css" type="text/css" media="print">	
        <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/master.css" type="text/css" media="screen, projection">
        
        <link rel="openid.server"
                href="http://www.myopenid.com/server" />
          <link rel="openid.delegate"
                href="http://cmheisel.myopenid.com/" />
          <link rel="openid2.local_id"
                href="http://cmheisel.myopenid.com" />
          <link rel="openid2.provider"
                href="http://www.myopenid.com/server" />
          <meta http-equiv="X-XRDS-Location"
                content="http://www.myopenid.com/xrds?username=cmheisel.myopenid.com" />
        
        <meta name="microid" content="mailto+http:sha1:1390556c66ad948d78e56e4e17cd4913f03b2fc3" />
        
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">
            <div class="span-12 prepend-6 append-6 last" id="header">
                <?php if(is_front_page()): ?><h1><?php bloginfo('name'); ?></h1><?php endif; ?>
                <?php if(!is_front_page()): ?><h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1><?php endif; ?>
                <?php if(!is_front_page()):  ?>
                <p id="nav">
                    <?php 
                    $args = array(
                        'orderby' => 'rating',
                        'category_name' => "Nav",
                    );
                    $nav = get_bookmarks($args);
                    foreach($nav as $key => $item):
                    ?>
                    <?php if($key != 0) echo " | "?><a href="<?php echo $item->link_url ?>" title="<?php echo $item->link_description ?>"><?php echo $item->link_name ?></a>
                    <?php endforeach; ?>
                </p>
                <?php endif; ?>
            </div>
            
            <div class="span-10 prepend-7 append-7 last clear" id="content">
            <!-- CONTENT START -->