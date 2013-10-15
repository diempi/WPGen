<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css">
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div id="main">
            <header role="banner">
                <div id="logo">
                    <a href="<?php bloginfo( 'siteurl' ); ?>" title="Retournez à l'accueil">
                        <h1><?php bloginfo( 'name' ); ?></h1>
                        <h2 class="job"><?php bloginfo( 'description' ); ?></h2>
                    </a>
                </div>
                <nav>
                    <?php 
                    wp_nav_menu( array('theme_location'  => 'primary',
                        'menu'  => 'Primary Menu')); // ou wp_nav_menu( array('theme_location'  => 'primary')
                    ?>
                </nav>
            </header><!-- END HEADER -->