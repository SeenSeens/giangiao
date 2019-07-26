<?php
class WG_Media extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_media',
			'description'                 => __( 'Video nổi bật' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'media', __( 'Video nổi bật' ), $widget_ops );
        $this->alt_option_name = 'WG_Media';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'url' => '',);
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $url = esc_attr($instance['url']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('url'); ?>"><?php esc_html_e( 'Đường dẫn vieo', 'halink' ); ?></label>
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
        <aside id="text-5" class="widget widget_text">
            <span class="widget-title">
                <span><?= $title; ?></span>
            </span>
            <div class="is-divider small"></div>
                <div class="textwidget">
                    <?= do_shortcode($url); ?>
                </div>
        </aside>
        <?php
    }
}
