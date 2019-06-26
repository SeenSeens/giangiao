<?php
class WG_Home2 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home2',
			'description'                 => __( 'Trang chủ dòng 2' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home', __( 'Trang chủ 2' ), $widget_ops );
        $this->alt_option_name = 'WG_Home2';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'description' => '', 'post' => '', 'categories' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $description = esc_attr($instance['description']);
        $post = esc_attr($instance['post']);
        $categories = esc_attr($instance['categories']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('description'); ?>"><?php esc_html_e( 'Văn bản ngắn', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('description'); ?>" id="<?= $this->get_field_id('description') ?>" value="<?= $description; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('post'); ?>"><?php esc_html_e( 'Văn bản ngắn', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('post'); ?>" id="<?= $this->get_field_id('description') ?>" value="<?= $description; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
            <label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Chuyên mục được chọn', 'halink' ); ?></label>
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
        
    }
    function widget($args, $instance)
    {
       
    }
}
