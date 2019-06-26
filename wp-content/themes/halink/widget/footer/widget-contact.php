<?php
class WG_Contact extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_contact',
			'description'                 => __( 'Contact' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'contact', __( 'Contact' ), $widget_ops );
        $this->alt_option_name = 'WG_Contact';
    }
    function form($instance)
    { 
        $defaults = array('title' => '', 'office' => '', 'factory' => '', 'email' => '', 'hotline' => '', 'techniques' => '');
        $instance = wp_parse_args($instance, $defaults);
        $title = esc_attr($instance['title']);
        $office = esc_attr($instance['office']);
        $factory = esc_attr($instance['factory']);
        $email = esc_attr($instance['email']);
        $hotline = esc_attr($instance['hotline']);
        $techniques = esc_attr($instance['techniques']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('title'); ?>"><?php esc_html_e( 'Tiêu đề', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('title'); ?>" id="<?= $this->get_field_id('title') ?>" value="<?= $title; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('office'); ?>"><?php esc_html_e( 'Văn phòng', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('office'); ?>" id="<?= $this->get_field_id('office') ?>" value="<?= $office; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('factory'); ?>"><?php esc_html_e( 'Xưởng', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('factory'); ?>" id="<?= $this->get_field_id('factory') ?>" value="<?= $factory; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('email'); ?>"><?php esc_html_e( 'Email', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('email'); ?>" id="<?= $this->get_field_id('email') ?>" value="<?= $email; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('hotline'); ?>"><?php esc_html_e( 'Hotline', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('hotline'); ?>" id="<?= $this->get_field_id('hotline') ?>" value="<?= $hotline; ?>">
        </p>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('techniques'); ?>"><?php esc_html_e( 'Kỹ thuật', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('techniques'); ?>" id="<?= $this->get_field_id('techniques') ?>" value="<?= $techniques; ?>">
		</p>
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['office'] = $new_instance['office'];
        $instance['factory'] = $new_instance['factory'];
        $instance['email'] = $new_instance['email'];
        $instance['hotline'] = $new_instance['hotline'];
        $instance['techniques'] = $new_instance['techniques'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters( 'widget_title', $instance['title'] );
        $office = apply_filters( 'widget_office', $instance['office'] );
        $factory = apply_filters( 'widget_factory', $instance['factory'] );
        $email = apply_filters( 'widget_email', $instance['email'] );
        $hotline = apply_filters( 'widget_hotline', $instance['hotline'] );
        $techniques = apply_filters( 'widget_techniques', $instance['techniques'] );
        ?>
        <div class="col medium-4 small-12 large-3">
            <div class="col-inner">
                <h4 class="uppercase"><?= $title; ?></h4>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:1005px;background-color:rgb(15, 116, 188);"></div>
                </div>
                <!-- .divider -->
                <p>
                    <i class="fa fa-map-marker"></i><strong> Văn Phòng:</strong> <?= $office; ?> <br />
                    <i class="fa fa-map-marker"></i><strong> Xưởng:</strong> <?= $factory; ?> <br />
                    <i class="fa fa-envelope"></i> <strong>Email:</strong><br /> <?= $email; ?> <br />
                    <i class="fa fa-phone"></i><strong> Hotline:</strong> <?= $hotline; ?> <br />
                    <i class="fa fa-phone"></i><strong> Kỹ thuật:</strong> <?= $techniques; ?>
                </p>
            </div>
        </div>
        <?php
    }
}
