<!doctype html>
<html <?php language_attributes(); ?> class="loading-site no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">
        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper stuck">
                <div id="masthead" class="header-main">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation" style="padding-left:0px; padding-right:0px;">
                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full' );
                            ?>
                            <a href="<?php bloginfo( 'url' ); ?>">
                                <img src="<?= esc_url( $custom_logo_url ); ?>" class="header_logo header-logo">
                            </a>
                        </div>
                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left">
                                <li class="nav-icon has-icon">
                                    <div class="header-button">
                                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="icon primary button round is-small" aria-controls="main-menu" aria-expanded="false">
                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                         <!-- Mobile Sidebar -->
                         <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
                            <div class="sidebar-menu no-scrollbar ">
                            <?php 
                                wp_nav_menu(array(  
                                'theme_location'  => 'menu',
                                'container'		=> false,
                                'menu_class'        => 'nav nav-sidebar nav-vertical nav-uppercase',
                                'walker' => new Mobile_Nav_Walker
                                )
                            ); 
                            ?>
                            </div><!-- inner -->
                        </div><!-- #mobile-menu -->
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left nav-size-large nav-spacing-medium"></ul>
                        </div>
                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                        <?php 
                        wp_nav_menu(array(  
                            'theme_location'  => 'menu',
                            'container'		=> false,
                            'menu_class'        => 'header-nav header-nav-main nav nav-right nav-size-large nav-spacing-medium',
                            'walker' => new Web366_Nav_Walker
                            )
                        ); 
                        ?>
                        </div> <!-- Mobile Right Elements -->
                        <a class="nav-top-link">
                            <div class="flex-col show-for-medium flex-right">
                                <ul class="mobile-nav nav nav-right"></ul>
                            </div>
                        </a>
                    </div>
                        <!-- .header-inner -->
                        <!-- Header divider -->
                        <div class="container">
                            <div class="top-divider full-width"></div>
                        </div>
                </div> <!-- .header-main -->
                <a class="nav-top-link">
                    <div class="header-bg-container fill">
                        <div class="header-bg-image fill"></div>
                        <div class="header-bg-color fill"></div>
                    </div> <!-- .header-bg-container -->
                </a>
            </div> <!-- header-wrapper-->
        </header>