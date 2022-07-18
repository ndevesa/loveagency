<!DOCTYPE html>
<!--
Author: Nicolás Devesa.
Author URI: http://www.nicolasdev.com/
-->
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <style>#wpadminbar{display:none!important;}html{margin-top:0px!important;}</style>
</head>

<body <?php body_class('love-agency'); ?>>
    <?php wp_body_open(); ?>

    <header>
        <nav>
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Love Agency" class="logotipe" width="120"></a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#loveMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/openMenu.svg" class="openMenu d-block d-md-none" width="30">
                

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/closeMenu.svg" class="closeMenu d-none" width="25">

                <div id="mobileMenu">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Love Agency" class="logotipe" width="120"></a>
                    
                    <?php 
                    wp_nav_menu( array(
                        'menu' => "header-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                        'menu_class' => "navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        'add_li_class' => 'nav-item my-4' // Class for li elements inside of the ul
                    ));
                    ?>

                    <div class="since"><p>Since 2009</p></div>
                </div>
            </div>
        </nav>
    </header>