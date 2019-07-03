<?php
class WG_Home4 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home_4',
			'description'                 => __( 'Phần này hiển hiện slider tin tức (mục này test) phần này dùng chung với slider bài viết trên trang chủ' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home_4', __( 'Slider tin tức' ), $widget_ops );
        $this->alt_option_name = 'WG_Home4';
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
        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill">
            <div class="upb_row_bg" data-bg-override="full" style="background: rgb(242, 242, 242); min-width: 1349px; left: -87px; width: 1349px;"></div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <h3 style="font-size: 23px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1500716451871"><?= $title; ?></h3>
                        <div class="vc_grid-container-wrapper vc_clearfix">
                            <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover owl-carousel vc_grid-owl-theme owl-loaded owl-drag" data-vc-pageable-content="true">
                                <div class="owl-stage-outer owl-height" style="height: 385px;">
                                    <div class="owl-stage">
                                        <?php while($query->have_posts()) { 
                                            $query->the_post();
                                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' ); 
                                        ?>
                                        <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                            <div class="vc_pageable-slide-wrapper">
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
                                                    </div>
                                                    <div class="vc_clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
