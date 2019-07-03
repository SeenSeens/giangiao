<?php
if ( ! function_exists( 'halink_setup' ) ) :
	function halink_setup() {
        load_theme_textdomain( 'halink', get_template_directory() . '/languages' );
        
		add_theme_support( 'automatic-feed-links' );

		if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
			return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
			require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		}

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'halink' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'halink_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'halink_setup' );

function halink_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'halink_content_width', 640 );
}
add_action( 'after_setup_theme', 'halink_content_width', 0 );

function halink_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'halink' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'halink' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Index', 'halink' ),
		'id'            => 'index',
		'description'   => esc_html__( 'Add widgets displayed on the homepage here.', 'halink' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Index 1', 'halink' ),
		'id'            => 'index-1',
		'description'   => esc_html__( 'Add widgets displayed on the homepage here.', 'halink' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'halink' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets displayed on the footer here.', 'halink' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'halink_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function halink_scripts() {
    wp_enqueue_style( 'halink-style', get_stylesheet_uri() );
	?>
	<script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "http:\/\/giangiaophuhung.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.9"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var b, c, d, e, f = String.fromCharCode;
                if (!k || !k.fillText) return !1;
                switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                    case "flag":
                        return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b !== c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c);
                    case "emoji4":
                        return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e
                }
                return !1
            }
            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var f, g, h, i, j = b.createElement("canvas"),
                k = j.getContext && j.getContext("2d");
            for (i = Array("flag", "emoji4"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            	c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
	<?php
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css', array(), '3.4.1', true );
	wp_enqueue_style( 'flatsome-icons', get_template_directory_uri().'/assets/css/fl-icons6de8.css', 'all' );
	wp_enqueue_style( 'composer_front', get_template_directory_uri().'/plugins/js_composer/assets/css/js_composer.min3c21.css', 'all' );
	wp_enqueue_style( 'bsf-Defaults', get_template_directory_uri().'/uploads/smile_fonts/Defaults/Defaults1f93.css', 'all' );
	?><link rel='stylesheet' id='ultimate-google-fonts-css' href='https://fonts.googleapis.com/css?family=Roboto+Condensed&amp;subset=vietnamese,latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext' type='text/css' media='all' /><?php
	wp_enqueue_style( 'ultimate-style', get_template_directory_uri().'/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.minf28f.css', 'all' );
	wp_enqueue_style( 'ult-icons', get_template_directory_uri().'/plugins/Ultimate_VC_Addons/assets/css/iconsf28f.css', 'all' );
	wp_enqueue_style( 'flatsome-main', get_template_directory_uri().'/assets/css/flatsomeb186.css', 'all' );
    wp_enqueue_style( 'flatsome-style', get_template_directory_uri().'/gian-giao-child/styleb186.css', 'all' );
    wp_enqueue_style( 'prettyphoto-style', get_template_directory_uri().'/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min3c21.css', 'all' );
    wp_enqueue_style( 'carousel-style', get_template_directory_uri().'/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min3c21.css', 'all' );
    wp_enqueue_style( 'animate-style', get_template_directory_uri().'/plugins/js_composer/assets/lib/bower/animate-css/animate.min3c21.css', 'all' );
    

	wp_enqueue_script( 'halink-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), '3.4.1', true);
	wp_enqueue_script( 'halink-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'ultimate-script', get_template_directory_uri().'/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.minf28f.js', array('jquery'));
	wp_enqueue_script( 'flatsome-script', get_template_directory_uri().'/assets/js/flatsomeb186.js', array('jquery'));
	wp_enqueue_script( 'composer-script', get_template_directory_uri().'/plugins/js_composer/assets/js/dist/js_composer_front.min3c21.js', array('jquery'));
	wp_enqueue_script( 'prettyPhoto-script', get_template_directory_uri().'/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min3c21.js', array('jquery'));
	wp_enqueue_script( 'twbsPagination-script', get_template_directory_uri().'/plugins/js_composer/assets/lib/bower/twbs-pagination/jquery.twbsPagination.min3c21.js', array('jquery'));
	wp_enqueue_script( 'carousel-script', get_template_directory_uri().'/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.min3c21.js', array('jquery'));
	wp_enqueue_script( 'imagesloaded-script', get_template_directory_uri().'/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min1f93.js', array('jquery'));
	wp_enqueue_script( 'waypoints-script', get_template_directory_uri().'/plugins/js_composer/assets/lib/waypoints/waypoints.min3c21.js', array('jquery'));
	wp_enqueue_script( 'vc_grid-script', get_template_directory_uri().'/plugins/js_composer/assets/js/dist/vc_grid.min3c21.js', array('jquery'));
	?>
	<style>
        
	</style>
	<script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ["Roboto:regular,500", "Roboto:regular,regular", "Roboto:regular,700", "Roboto", ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
	</script>
	<?php wp_enqueue_style( 'awesome-style', get_template_directory_uri().'/css/font-awesome.min.css', 'all' ); ?>
	<style id="custom-css" type="text/css">
         :root {
            --primary-color: #58925B;
        }
        /* Site Width */       
        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1175px
        }        
        .row.row-collapse {
            max-width: 1145px
        }        
        .row.row-small {
            max-width: 1167.5px
        }        
        .row.row-large {
            max-width: 1205px
        }        
        .header-main {
            height: 70px
        }        
        #logo img {
            max-height: 70px
        }        
        #logo {
            width: 250px;
        }        
        #logo a {
            max-width: 250px;
        }        
        .header-top {
            min-height: 30px
        }        
        .transparent .header-main {
            height: 70px
        }        
        .transparent #logo img {
            max-height: 70px
        }       
        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 70px;
        }        
        .transparent .header-wrapper {
            background-color: rgba(145, 145, 145, 0.29)!important;
        }        
        .transparent .top-divider {
            display: none;
        }        
        .header.show-on-scroll,
        .stuck .header-main {
            height: 70px!important
        }        
        .stuck #logo img {
            max-height: 70px!important
        }        
        .header-bg-color,
        .header-wrapper {
            background-color: rgba(255, 255, 255, 0.9)
        }        
        .header-bottom {
            background-color: #f1f1f1
        }        
        .header-main .nav>li>a {
            line-height: 16px
        }        
        .stuck .header-main .nav>li>a {
            line-height: 50px
        }        
        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }
            #logo img {
                max-height: 70px
            }
        }
        /* Color */        
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #58925B;
        }
        /* Color !important */        
        [data-text-color="primary"] {
            color: #58925B!important;
        }
        /* Background */        
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #58925B;
        }
        /* Border */      
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #58925B
        }        
        .nav-tabs>li.active>a {
            border-top-color: #58925B
        }
        /* Fill */       
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #58925B;
        }        
        body {
            font-size: 100%;
        }        
        @media screen and (max-width: 549px) {
            body {
                font-size: 100%;
            }
        }        
        body {
            font-family: "Roboto", sans-serif
        }        
        body {
            font-weight: 0
        }       
        body {
            color: #000000
        }      
        .nav>li>a {
            font-family: "Roboto", sans-serif;
        }       
        .nav>li>a {
            font-weight: 700;
        }       
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Roboto", sans-serif;
        }        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 500;
        }       
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font {
            color: #000000;
        }        
        .alt-font {
            font-family: "Roboto", sans-serif;
        }        
        a {
            color: #211300;
        }        
        a:hover {
            color: #1DBB46;
        }        
        .tagcloud a:hover {
            border-color: #1DBB46;
            background-color: #1DBB46;
        }        
        .footer-2 {
            background-color: #58925B !important;
        }       
        .absolute-footer,
        html {
            background-color: rgba(88, 146, 91, 0.96)
        }        
        .floatingbox {
            padding-left: 62%;
        }        
        .ult-carousel-wrapper {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }       
        @media (max-width: 849px) {
            .floatingbox {
                padding-left: 35%;
            }
            .ult-carousel-wrapper {
                margin-bottom: 0px;
                padding-bottom: 0px;
            }
        }        
        @media (max-width: 549px) {
            .floatingbox {
                padding-left: 17%;
            }
            .ult-carousel-wrapper {
                margin-bottom: 0px;
                padding-bottom: 0px;
            }
        }       
        .label-new.menu-item>a:after {
            content: "New";
        }        
        .label-hot.menu-item>a:after {
            content: "Hot";
        }        
        .label-sale.menu-item>a:after {
            content: "Sale";
        }      
        .label-popular.menu-item>a:after {
            content: "Popular";
        }
	</style>
	<style type="text/css" id="wp-custom-css">
	/* chỉnh css lai cái widget title */        
        .widget-area .widget-title {
            padding: 10px 5px 10px 5px;
            font-size: 25px;
            color: white;
            display: block;
            line-height: 1.5;
            padding-left: 15px;
            background: #f1f1f1;
            font-size: 1.1em;
            position: relative;
            font-weight: bold;
            color: #444;
            margin-bottom: 20px;
        }       
        .widget-area .widget-title:before {
            content: '';
            position: absolute;
            width: 3px;
            background: #58925B;
            left: -1px;
            top: 0;
            height: 100%;
            display: block;
        }
        /*
		 * Bạn có thể thêm CSS ở đây.
		 * Nhấp chuột vào biểu tượng trợ giúp phía trên để tìm hiểu thêm.
        */        
        .is-divider {
            height: 0px!important;
        }
        /* Feature image trong post */        
        .entry-image {
            display: none;
        }       
        .entry-category {
            display: none;
        }       
        .entry-meta {
            display: none;
        }       
        .entry-header-text {
            padding-bottom: 0px;
        }       
        .footer-widgets footer footer-2 {
            padding-bottom: 0px;
        }
        /*STICKY FOOTER NAV FOOTER*/        
        .footer-widgets.footer.footer-1 {
            position: fixed;
            bottom: 0px !important;
            left: 0px;
            right: 0px;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            width: -webkit-fill-available;
            z-index: 100;
            background: #000;
            opacity: .9;
        }       
        .footer-widgets.footer.footer-1 {
            height: 45px;
        }        
        .float-col-1 .col-inner {
            width: 150px;
        }
        /*END STICKY FOOTER NAV FOOTER*/
	</style>
	<style type="text/css" data-type="vc_custom-css">
        #main {
            padding: 0px;
        }        
        .h1-hidden {
            display: none;
        }
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1497023187534 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1498134269344 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1498550005111 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1498549235462 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1498549246140 {
            margin-bottom: 20px !important;
        }
        
        .vc_custom_1498549256459 {
            margin-bottom: 0px !important;
        }       
        .vc_custom_1497628908084 {
            margin-bottom: 20px !important;
        }
        
        .vc_custom_1497599307573 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1497628931753 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1497527302601 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1501940453643 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1501940443825 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1498550030132 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1498550039060 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1501940425256 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1501940415565 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1497629067172 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1497527423780 {
            margin-bottom: 0px !important;
        }       
        .vc_custom_1499349589062 {
            margin-bottom: 20px !important;
        }        
        .vc_custom_1497527448897 {
            margin-bottom: 0px !important;
        }        
        .vc_custom_1500716390814 {
            margin-bottom: 0px !important;
        }       
        .vc_custom_1495882421358 {
            margin-bottom: 20px !important;
        }      
        .vc_custom_1500716451871 {
            margin-bottom: 0px !important;
        }       
        .vc_custom_1497577340664 {
            margin-bottom: 0px !important;
        }       
        .vc_custom_1497371536713 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 0px !important;
            padding-left: 20px !important;
            border-left-color: #f7f7f7 !important;
            border-left-style: solid !important;
            border-right-color: #f7f7f7 !important;
            border-right-style: solid !important;
            border-top-color: #f7f7f7 !important;
            border-top-style: solid !important;
            border-bottom-color: #f7f7f7 !important;
            border-bottom-style: solid !important;
        }       
        .vc_custom_1497371515591 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            padding-left: 20px !important;
            border-left-color: #f7f7f7 !important;
            border-left-style: solid !important;
            border-right-color: #f7f7f7 !important;
            border-right-style: solid !important;
            border-top-color: #f7f7f7 !important;
            border-top-style: solid !important;
            border-bottom-color: #f7f7f7 !important;
            border-bottom-style: solid !important;
        }       
        .vc_custom_1497515373902 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            padding-left: 20px !important;
            border-left-color: #f7f7f7 !important;
            border-left-style: solid !important;
            border-right-color: #f7f7f7 !important;
            border-right-style: solid !important;
            border-top-color: #f7f7f7 !important;
            border-top-style: solid !important;
            border-bottom-color: #f7f7f7 !important;
            border-bottom-style: solid !important;
        }       
        .vc_custom_1497515391287 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            padding-left: 20px !important;
            border-left-color: #f7f7f7 !important;
            border-left-style: solid !important;
            border-right-color: #f7f7f7 !important;
            border-right-style: solid !important;
            border-top-color: #f7f7f7 !important;
            border-top-style: solid !important;
            border-bottom-color: #f7f7f7 !important;
            border-bottom-style: solid !important;
        }      
        .vc_custom_1497515409624 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            border-bottom-width: 1px !important;
            border-left-width: 1px !important;
            padding-top: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            padding-left: 20px !important;
            border-left-color: #f7f7f7 !important;
            border-left-style: solid !important;
            border-right-color: #f7f7f7 !important;
            border-right-style: solid !important;
            border-top-color: #f7f7f7 !important;
            border-top-style: solid !important;
            border-bottom-color: #f7f7f7 !important;
            border-bottom-style: solid !important;
        }
	</style>
	<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
	<?php
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'halink_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Widget
 */
require_once get_parent_theme_file_path('/widget/widget-slider.php');
require_once get_parent_theme_file_path('/widget/widget-introduced.php');
require_once get_parent_theme_file_path('/widget/widget-products.php');
// Footer
require_once get_parent_theme_file_path('/widget/footer/widget-contact.php');
require_once get_parent_theme_file_path('/widget/footer/widget-footer2.php');
require_once get_parent_theme_file_path('/widget/footer/widget-footer3.php');
require_once get_parent_theme_file_path('/widget/footer/widget-footer4.php');
// Home
require_once get_parent_theme_file_path('/widget/home/widget-home.php');
require_once get_parent_theme_file_path('/widget/home/widget-home2.php');
require_once get_parent_theme_file_path('/widget/home/widget-home3.php');
require_once get_parent_theme_file_path('/widget/home/widget-home4.php');
require_once get_parent_theme_file_path('/widget/home/widget-home5.php');
// Sider Bar
require_once get_parent_theme_file_path('/widget/sidebar/widget-consulting.php');
require_once get_parent_theme_file_path('/widget/sidebar/widget-media.php');
require_once get_parent_theme_file_path('/widget/sidebar/widget-latest.php');
if (!file_exists('halink_widget')) {
	function halink_widget() {
		register_widget('WG_Slider');
		register_widget('WG_Introduced');
		register_widget('WG_Products');
		// Footer
		register_widget('WG_Contact');
		register_widget('WG_Footer2');
		register_widget('WG_Footer3');
		register_widget('WG_Footer4');
		// Home
        register_widget('WG_Home');
        register_widget('WG_Home2');
        register_widget('WG_Home3');
        register_widget('WG_Home4');
        register_widget('WG_Home5');
        // Side Bar
        register_widget('WG_Consulting');
        register_widget('WG_Media');
        register_widget('WP_Widget_Latest_Posts');
	}
	add_action('widgets_init', 'halink_widget');
}


/**
 * Add a parent CSS class for nav menu items.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();
 
    // Collect menu items with parents.
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
 
    // Add class.
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'menu-parent-item';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );

/**
 * Short title
 */
function short_title($after = '', $length) {
    $qdztitle = explode(' ', get_the_title(), $length);
    if (count($qdztitle)>=$length) {
        array_pop($qdztitle);
        $qdztitle = implode(" ",$qdztitle). $after;
    } else {
        $qdztitle = implode(" ",$qdztitle);
    }
    return $qdztitle;
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/login.css' ); // duong dan den file css moi
}
add_action('login_head', 'login_css');

/*
 @ ajax_pagination_scripts()
 @ Nhúng file ajax-pagination.js vào theme
 */
// add_action('wp_enqueue_scripts', 'ajax_pagination_scripts');

// function ajax_pagination_scripts() {
//     /*
//      * Chèn file ajax-pagination.js vào frontend
//      */
//     wp_enqueue_script('ajax-pagination-script', plugins_url('ajax-pagination.js', __FILE__),
//         array('jquery')
//     );
// }