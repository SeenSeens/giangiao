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
        
	</style>
	<style type="text/css" id="wp-custom-css">
	
	</style>
	<style type="text/css" data-type="vc_custom-css">
        
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
        
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
require_once get_parent_theme_file_path('/widget/shortcode/widget-slidertop.php');
if (!file_exists('halink_widget')) {
	function halink_widget() {
		register_widget('WG_Slider');
		register_widget('WG_Introduced');
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
		// Shortcode
		register_widget('WG_Slider_Top');
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