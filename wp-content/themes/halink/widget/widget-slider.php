<?php
class WG_Slider extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_slider',
			'description'                 => __( 'Slider' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'slider', __( 'Slider' ), $widget_ops );
        $this->alt_option_name = 'WG_Slider';
    }
    function form($instance)
    { 
        $instance = wp_parse_args($instance);
        $title     = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $describe     = isset($instance['describe']) ? esc_attr($instance['describe']) : '';
        $categories     = isset($instance['categories']) ? esc_attr($instance['categories']) : '';
        ?>
        <p>
            <label for="<?= $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?= $this->get_field_id('title'); ?>" name="<?= $this->get_field_name('title'); ?>" type="text" value="<?= $title; ?>" />
        </p>
        <p>
            <label for="<?= $this->get_field_id('describe'); ?>"><?php esc_html_e( 'Mô tả ngắn', 'halink' ); ?></label>
            <textarea class="widefat" name="<?= $this->get_field_name('describe'); ?>" id="<?= $this->get_field_id('describe'); ?>" cols="30" rows="10"><?= $describe; ?></textarea>
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
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field($new_instance['title']);
        $instance['describe']     = sanitize_text_field($new_instance['describe']);
        $instance['categories'] = $_POST[$this->get_field_id('categories')];
        return $instance;

    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $describe = apply_filters('widget_describe', $instance['describe']);
        $categories = apply_filters('widget_categories', $instance['categories']);
        ?>
        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill">
            <div style="background: rgb(242, 242, 242); min-width: 1349px; left: -87px; width: 1349px;"></div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                    <div class="container mb-5 mt-5">
                        <div class="owl-carousel owl-theme">
                            <div class="ml-2 mr-2" style="background-color: #ddd;">
                                <div class="card">
                                    <img src="https://economictimes.indiatimes.com/img/67536732/Master.jpg" alt="" srcset="" class="card-img-tops">
                                    <div class="card-body">
                                        <h5 class="card-title">Post title</h5>
                                        Post Description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
            $('.owl-carousel').OwlCarousel();
        </script>
        <?php
    }
}
