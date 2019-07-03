<?php
/*
Plugin Name: AJAX Pagination
Description: Phân trang website bằng AJAX
Version: 1.0
Author: Tuấn IT
Author URI: https://www.facebook.com/tuan.seen.it
*/

/*
 @ ajax_pagination_scripts()
 @ Nhúng file ajax-pagination.js vào theme
 */
add_action( 'wp_enqueue_scripts', 'ajax_pagination_scripts' );
function ajax_pagination_scripts() {
    /*
    * Chèn file ajax-pagination.js vào frontend
    */
    wp_enqueue_script( 'ajax-pagination-script', plugins_url( '/ajax-pagination.js', __FILE__ ),
            array( 'jquery' )
    );
}
/*
 * Gọi AJAX trong WordPress
 */
global $wp_query;
wp_localize_script( 'ajax-pagination-script', 'ajax_object', array (
        // Các phương thức sẽ sử dụng
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'query_vars' => json_encode( $wp_query->query )        
    )
);