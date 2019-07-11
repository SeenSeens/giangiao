<?php
class WG_News extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_news',
			'description'                 => __( 'Tin tức' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'news', __( 'Tin tức' ), $widget_ops );
        $this->alt_option_name = 'WG_News';
    }
    function form($instance)
    {
        $instance = wp_parse_args($instance);
        $title     = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $categories     = isset($instance['categories']) ? esc_attr($instance['categories']) : '';
        $number    = isset($instance['number']) ? absint($instance['number']) : 5;
        ?>
        <p>
            <label for="<?= $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?= $this->get_field_id('title'); ?>" name="<?= $this->get_field_name('title'); ?>" type="text" value="<?= $title; ?>" />
        </p>
        <p>
            <label for="<?= $this->get_field_id('categories'); ?>"><?php _e('Categories:'); ?></label>
            <select name="<?= $this->get_field_id('categories'); ?>" id="<?= $this->get_field_id('categories'); ?>" style='width:50%;margin-left:5px'>
                <option value="">Bất kỳ</option>
                <?php
                $taxonomy     = 'category';
                $orderby      = 'name';
                $show_count   = 0;
                $pad_counts   = 0;
                $hierarchical = 1;
                $title        = '';
                $empty        = 0;
                $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
                );
                $all_categories = get_categories($args);
                foreach ($all_categories as $cat) {
                    $sl = "";
                    if ($cat->term_id == $categories) {
                        $sl = "selected";
                    }
                    echo "<option value=\"" . $cat->term_id . "\" $sl>" . $cat->name . "</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label for="<?= $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
            <input class="tiny-text" id="<?= $this->get_field_id('number'); ?>" name="<?= $this->get_field_name('number'); ?>" type="number" step="1" min="1" value="<?= $number; ?>" size="3" />
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field($new_instance['title']);
        $instance['categories'] = $_POST[$this->get_field_id('categories')];
        $instance['number']    = (int)$new_instance['number'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $categories = apply_filters('widget_categories', $instance['categories']);
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number ) {
			$number = 5;
        }
        $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => $categories,
            'orderby' => 'ID',
            'order' => 'DESC',
            'posts_per_page' => $number
        ));
        ?>
        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill" style="position: relative;">
            <div class="upb_row_bg" data-bg-override="full" style="background: rgb(242, 242, 242) none repeat scroll 0% 0%; min-width: 1349px; left: -87px; width: 1349px;"></div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h3 style="font-size: 23px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal; text-transform: uppercase;" class="vc_custom_heading vc_custom_1500716451871"><?= $title; ?></h3>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_30 vc_sep_shadow vc_sep_pos_align_center vc_separator_no_text vc_sep_color_chino">
                            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
                            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                        <div class="vc_empty_space" style="height: 10px;">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="vc_grid-container-wrapper vc_clearfix">
                            <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid">
                                <div class="vc_grid-loading" style="display: none;"></div>
                                <style type="text/css" data-type="vc_shortcodes-custom-css">
                                    .vc_custom_1497675458847{background-color: #f9f9f9 !important;}
                                    .vc_custom_1497675477789{margin-right: 5px !important;margin-left: 5px !important;}
                                </style>
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
                                <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover owl-carousel vc_grid-owl-theme owl-loaded owl-drag" data-vc-pageable-content="true">
                                    <div class="owl-stage-outer owl-height" style="height: 386px;">
                                        <div class="owl-stage">
                                            <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                <?php while($query->have_posts()) { 
                                                $query->the_post();
                                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' ); 
                                                ?>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url(<?= $thumb['0']; ?>) !important;">
                                                                    <a href="<?php the_permalink(); ?>" class="vc_gitem-link vc-zone-link"></a>
                                                                    <?php
                                                                    the_post_thumbnail('post_thumbnail', [
                                                                        'class' => 'vc_gitem-zone-img'
                                                                    ])
                                                                    ?>
                                                                    <div class="vc_gitem-zone-mini"></div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left"><?php the_title(); ?></h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                <?php } ?>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>
                                    <div class="vc_grid-owl-nav vc_grid-owl-nav-color-blue">
                                        <div class="vc_grid-owl-prev none vc_grid-nav-prev-inside disabled"></div>
                                        <div class="vc_grid-owl-next none vc_grid-nav-next-inside"></div>
                                    </div>
                                    <div class="vc_grid-owl-dots vc_grid-radio_dots vc_grid-owl-dots-color-grey">
                                        <div class="vc_grid-owl-dot active"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
