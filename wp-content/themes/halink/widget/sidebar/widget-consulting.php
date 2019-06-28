<?php
class WG_Consulting extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_consulting',
			'description'                 => __( 'Tư vấn mua hàng' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'consulting', __( 'Tư vấn mua hàng' ), $widget_ops );
        $this->alt_option_name = 'WG_Consulting';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'hotline' => '', 'email' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $hotline = esc_attr($instance['hotline']);
        $email = esc_attr($instance['email']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('hotline'); ?>"><?php esc_html_e( 'Hotline', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('hotline'); ?>" id="<?= $this->get_field_id('hotline') ?>" value="<?= $hotline; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('email'); ?>"><?php esc_html_e( 'Email', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('email'); ?>" id="<?= $this->get_field_id('email') ?>" value="<?= $email; ?>">
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['hotline'] = $new_instance['hotline'];
        $instance['email'] = $new_instance['email'];      
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $hotline = apply_filters( 'widget_hotline', $instance['hotline'] );
        $email = apply_filters( 'widget_email', $instance['email'] );      
        ?>
        <aside id="text-3" class="widget widget_text">
            <span class="widget-title ">
                <span><?= $title; ?></span>
            </span>
            <div class="is-divider small"></div>
            <div class="textwidget">
                <span style="font-size:16px;">
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline: <font color="red"><?= $hotline; ?></font><br/>
                </span>
                <span style="font-size:16px;">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Email: 
                </span>
                <span style="font-size:13px;">
                    <font color="0000FF"> <?= $email; ?> </font>
                </span>
            </div>
        </aside>
        <?php
    }
}
