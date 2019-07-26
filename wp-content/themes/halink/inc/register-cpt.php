<?php
$partner= new CPT(
    array (
        'post_type_name' => 'partner',
        'singular' => __('Partner', 'halink'),
        'plural' => __('Partner', 'halink'),
        'slug' => 'partner'
    ),
    array (
        'supports' => array (
                'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'
            ),
        'menu_icon'   => 'dashicons-networking',
    )
);
