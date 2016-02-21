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

    <header class="site-header">
        <div class="container-fluid">
            <h1 class="logo"><a href="<?php echo home_url();?>"><img src="/wp-content/themes/hw18_wordpress_first/img/logo-1.svg" alt="BlogIn Logo"></a></h1>

            <nav class="site-nav">

                <?php
                $args = array(
                    'theme_location' => 'primary',
                    'sort_column' => 'menu_order'
                );
                ?>

                <?php wp_nav_menu( $args ); ?>
            </nav>
        </div>
    </header>
    <!-- /site-header -->
    <main>
        <div class="container-fluid">