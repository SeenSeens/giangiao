<!doctype html>
<html <?php language_attributes(); ?> class="js wf-roboto-n4-active wf-roboto-n7-active wf-roboto-n5-active wf-active js_active vc_desktop vc_transform vc_transform">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class('page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php lightbox nav-dropdown-has-arrow wpb-js-composer js-comp-ver-5.1.1 vc_responsive'); ?>>
    <div id="wrapper">
        <header id="header" class="header transparent has-transparent has-sticky sticky-jump">
            <div class="header-wrapper stuck">
                <div id="masthead" class="header-main nav-dark toggle-nav-dark">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                        <!-- Logo -->
                        <div id="logo" class="flex-col logo">
                            <!-- Header logo -->
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full' );
                            ?>
                            <a href="<?php bloginfo( 'url' ); ?>">
                                <img src="<?= esc_url( $custom_logo_url ); ?>" class="img-responsive header-logo-dark">
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
                        <!-- END Mobile Sidebar -->
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left nav-size-large nav-spacing-medium">
                            </ul>
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
                        </div> 
                        <!-- Mobile Right Elements -->
                        <a class="nav-top-link">
                            <div class="flex-col show-for-medium flex-right">
                                <ul class="mobile-nav nav nav-right "></ul>
                            </div>
                        </a>
                    </div> <!-- .header-inner -->
                    <a class="nav-top-link">
                        <div class="container">
                            <div class="top-divider full-width"></div>
                        </div>
                    </a>
                </div> <!-- .header-main -->
                <a class="nav-top-link">
                    <div class="header-bg-container fill">
                        <div class="header-bg-image fill"></div>
                        <div class="header-bg-color fill"></div>
                    </div>
                </a>
            </div> <!-- header-wrapper-->
        </header>