<!doctype html>
<html <?php language_attributes(); ?> class="loading-site no-js">
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
            <div class="header-wrapper">
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
                                <img src="<?= esc_url( $custom_logo_url ); ?>" class="img-responsive">
                            </a>
                        </div>
                        <!-- Mobile Left Elements -->
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <div class="header-button">
                                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="icon primary button round is-small" aria-controls="main-menu" aria-expanded="false">
                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Elements -->
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left nav-size-large nav-spacing-medium">
                            </ul>
                        </div>
                        <!-- Right Elements -->
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right nav-size-large nav-spacing-medium">
                            <?php
                            $menuLocations = get_nav_menu_locations();
                            $menuID = $menuLocations['menu'];
                            $primaryNav = wp_get_nav_menu_items($menuID);
                            $id_parent = 0;
                            foreach ($primaryNav as $navItem) {
                                if ($navItem->menu_item_parent == $id_parent) {
                                    echo '<li class="menu-item' . $navItem->ID . '"> <a href="' . $navItem->url . '" title="' . $navItem->title . '" class="nav-top-link">' . $navItem->title . '</a>';
                                    $sub = "";
                                    foreach ($primaryNav as $navItem2) {
                                        if ($navItem2->menu_item_parent == $navItem->ID) {
                                            $sub .= '<li class="menu-item' . $navItem2->ID . '"> <a href="' . $navItem2->url . '" title="' . $navItem2->title . '">' . $navItem2->title . '</a>';
                                            $sub2 = "";
                                            foreach ($primaryNav as $navItem3) {
                                                if ($navItem3->menu_item_parent == $navItem2->ID) {
                                                    $sub2 .= '<li class="menu-item' . $navItem3->ID . '"> <a href="' . $navItem3->url . '" title="' . $navItem3->title . '">' . $navItem3->title . '</a></li>';
                                                }
                                            }
                                            $sub .= '<ul>' . $sub2 . '</ul>';
                                            $sub .= '</li>';
                                        }
                                    }
                                    echo '<ul class="nav-dropdown nav-dropdown-default">' . $sub . '</ul>';
                                    echo '</li>';
                                }
                            }
                            ?>
                            </ul>
                        </div> <!-- Mobile Right Elements -->
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                            </ul>
                        </div>
                        </div>
                        <!-- .header-inner -->
                        <!-- Header divider -->
                        <div class="container">
                            <div class="top-divider full-width"></div>
                        </div>
                    </div>
                    <!-- .header-main -->
                    <div class="header-bg-container fill">
                        <div class="header-bg-image fill"></div>
                        <div class="header-bg-color fill"></div>
                    </div>
                    <!-- .header-bg-container -->
                </div>
                <!-- header-wrapper-->
        </header>