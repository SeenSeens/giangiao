<?php
class WG_Footer2 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_footer2',
			'description'                 => __( 'Chân trang 2' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'footer2', __( 'Chân trang 2' ), $widget_ops );
        $this->alt_option_name = 'WG_Footer2';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'slogan1' => '', 'slogan2' => '', 'slogan3' => '', 'slogan4' => '', 'slogan5' => '', 'slogan5.1' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $slogan1 = esc_attr($instance['slogan1']);
        $slogan2 = esc_attr($instance['slogan2']);
        $slogan3 = esc_attr($instance['slogan3']);
        $slogan4 = esc_attr($instance['slogan4']);
        $slogan5 = esc_attr($instance['slogan5']);
        $slogan51 = esc_attr($instance['slogan5.1']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan1'); ?>"><?php esc_html_e( 'Nội dung dòng 1', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan1'); ?>" id="<?= $this->get_field_id('slogan1') ?>" value="<?= $slogan1; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan2'); ?>"><?php esc_html_e( 'Nội dung dòng 2', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan2'); ?>" id="<?= $this->get_field_id('slogan2') ?>" value="<?= $slogan2; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan3'); ?>"><?php esc_html_e( 'Nội dung dòng 3', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan3'); ?>" id="<?= $this->get_field_id('slogan3') ?>" value="<?= $slogan3; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan4'); ?>"><?php esc_html_e( 'Nội dung dòng 4', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan4'); ?>" id="<?= $this->get_field_id('slogan4') ?>" value="<?= $slogan4; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan5'); ?>"><?php esc_html_e( 'Nội dung dòng 5', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan5'); ?>" id="<?= $this->get_field_id('slogan5') ?>" value="<?= $slogan5; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('slogan5.1'); ?>"><?php esc_html_e( 'Nội dung dòng 5 - 1', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('slogan5.1'); ?>" id="<?= $this->get_field_id('slogan5.1') ?>" value="<?= $slogan51; ?>">
		</p>
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['slogan1'] = $new_instance['slogan1'];
        $instance['slogan2'] = $new_instance['slogan2'];
        $instance['slogan3'] = $new_instance['slogan3'];
        $instance['slogan4'] = $new_instance['slogan4'];
        $instance['slogan5'] = $new_instance['slogan5'];
        $instance['slogan5.1'] = $new_instance['slogan5.1'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $slogan1 = apply_filters( 'widget_slogan1', $instance['slogan1'] );
        $slogan2 = apply_filters( 'widget_slogan2', $instance['slogan2'] );
        $slogan3 = apply_filters( 'widget_slogan3', $instance['slogan3'] );
        $slogan4 = apply_filters( 'widget_slogan4', $instance['slogan4'] );
        $slogan5 = apply_filters( 'widget_slogan5', $instance['slogan5'] );
        $slogan51 = apply_filters( 'widget_slogan5.1', $instance['slogan5.1'] );
        ?>
        <div class="col medium-4 small-12 large-3">
            <div class="col-inner">
                <h4 class="uppercase"><?= $title; ?></h4>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:1005px;background-color:rgb(15, 116, 188);"></div>
                </div>
                <!-- .divider -->
                <p>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> <?= $slogan1; ?>
                </p>
                <p>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> <?= $slogan2; ?><br />
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> <?= $slogan3; ?><br />
                    <i class="fa fa-check-square-o" aria-hidden="true"></i> <?= $slogan4; ?>
                </p>
                <p>
                    <i class="fa fa-handshake-o" aria-hidden="true"></i><br /> <?= $slogan5; ?>: <i>"<?= $slogan51; ?>".</i>
                </p>
            </div>
        </div>
        <?php
    }
}
