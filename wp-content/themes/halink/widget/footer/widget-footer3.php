<?php
class WG_Footer3 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_footer3',
			'description'                 => __( 'Chân trang 3 phần này không có tùy chỉnh riêng bạn có thể vào contact form 7 để tạo mẫu mới.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'footer3', __( 'Chân trang 3' ), $widget_ops );
        $this->alt_option_name = 'WG_Footer3';
    }
    function form($instance)
    {
        $defaults = array('title' => '', 'url' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $url = esc_attr($instance['url']);
        ?>
        <p>
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('url'); ?>"><?php esc_html_e( 'Short code', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('url'); ?>" id="<?= $this->get_field_id('url') ?>" value="<?= $url; ?>">
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['url'] = $new_instance['url'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $url = apply_filters( 'widget_url', $instance['url'] );
        ?>
        <div class="col medium-4 small-12 large-3">
            <div class="col-inner">
                <h4 class="uppercase"><?= $title; ?></h4>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:1005px;background-color:rgb(15, 116, 188);"></div>
                </div>
                <!-- .divider -->
                <?= do_shortcode("$url"); ?>
            </div>
        </div>
        <?php
    }
}
