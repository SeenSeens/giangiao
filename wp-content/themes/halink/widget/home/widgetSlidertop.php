<?php
class WG_Slider_Top extends WP_Widget {
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_slider_top',
			'description'                 => __( 'Slider - Top' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'slider_top', __( 'Slider Top' ), $widget_ops );
        $this->alt_option_name = 'WG_Slider_Top';
    }
    function form($instance)
    {
        $defaults = array('short' => '');
        $instance = wp_parse_args($instance, $defaults);
        $short = esc_attr($instance['short']);
        ?>
        <p>
			<label for="<?= $this->get_field_id('short'); ?>"><?php esc_html_e( 'Short code', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('short'); ?>" id="<?= $this->get_field_id('short') ?>" value="<?= $short; ?>">
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['short'] = $new_instance['short'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $short = apply_filters( 'widget_short', $instance['short'] );
        ?>
            <?= do_shortcode("$short"); ?>
        <?php
    }
}
