<?php
class WG_Footer4 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_footer4',
			'description'                 => __( 'Phần này hiển thị google maps' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'footer4', __( 'Chân trang 4' ), $widget_ops );
        $this->alt_option_name = 'WG_Footer4';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'url' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        ?>
        <div class="col medium-12 small-12 large-3">
            <div class="col-inner text-left" style="padding:0 0px 0px 0px;margin:0 0px 0px 0px;">
                <h4 class="uppercase"><?= $title; ?></h4>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:1005px;background-color:rgb(15, 116, 188);"></div>
                </div>
                <!-- .divider -->
                <p><?php echo do_shortcode('[sc name="maps"]'); ?></p>
            </div>
        </div>
        <?php
    }
}
