<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<!-- header -->

<body <?php body_class(); ?>>
<div class="wrapper">

    <!-- site-header -->

    <header>
        <div class="container-fluid">
            <div class="row top">
                <h1 class="logo"><a href="<?php echo home_url();?>"><img src="/wp-content/themes/hw19_wordpress_porfolio/img/logo.png" alt="BlogIn Logo"></a></h1>
                <div class="right social">
                    <a class="soc" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
                    <a class="soc" href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
                    <a class="soc" href="https://www.rssboard.org//"><span class="fa fa-rss"></span></a>
                </div>
            </div>
            <div class="row">
                <nav class="site-nav">

                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    ?>

                    <?php wp_nav_menu( $args ); ?>
                </nav>

            </div>
        </div>
    </header>
    <!-- /site-header -->
