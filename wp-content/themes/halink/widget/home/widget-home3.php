<?php
class WG_Home3 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home_3',
			'description'                 => __( 'Slider bài viết trên trang chủ' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home_3', __( 'Slider bài viết trên trang chủ' ), $widget_ops );
        $this->alt_option_name = 'WG_Home3';
    }
    function form($instance)
    { 
        $instance = wp_parse_args($instance);
        $title     = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $describe     = isset($instance['describe']) ? esc_attr($instance['describe']) : '';
        $categories     = isset($instance['categories']) ? esc_attr($instance['categories']) : '';
        $number    = isset($instance['number']) ? absint($instance['number']) : 5;
        ?>
        <p>
            <label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
            <input class="widefat" id="<?= $this->get_field_id('title'); ?>" name="<?= $this->get_field_name('title'); ?>" type="text" value="<?= $title; ?>" />
        </p>
        <p>
            <label for="<?= $this->get_field_id('describe'); ?>"><?php esc_html_e( 'Mô tả ngắn', 'halink' ); ?></label>
            <textarea class="widefat" name="<?= $this->get_field_name('describe'); ?>" id="<?= $this->get_field_id('describe'); ?>" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="<?= $this->get_field_id('categories'); ?>"><?php esc_html_e( 'Chọn chuyên mục', 'halink' ); ?></label>
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
            <label for="<?= $this->get_field_id('number'); ?>"><?php _e('Số lượng bài viết hiển thị trên slider'); ?></label>
            <input class="tiny-text" id="<?= $this->get_field_id('number'); ?>" name="<?= $this->get_field_name('number'); ?>" type="number" step="1" min="1" value="<?= $number; ?>" size="3" />
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field($new_instance['title']);
        $instance['describe']     = sanitize_text_field($new_instance['describe']);
        $instance['categories'] = $_POST[$this->get_field_id('categories')];
        $instance['number']    = (int)$new_instance['number'];
        return $instance;
    }
    function widget($args, $instance)
    { 
        
    }
}
