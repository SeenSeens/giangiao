<?php
class WG_Home extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home',
			'description'                 => __( 'Giới thiệu' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home', __( 'Giới thiệu' ), $widget_ops );
        $this->alt_option_name = 'WG_Home';
    }
    function form($instance)
    {
        $instance = wp_parse_args($instance);
        $page     = isset($instance['page']) ? esc_attr($instance['page']) : '';
        $site     = isset($instance['site']) ? esc_attr($instance['site']) : '';
        $content_line_1     = isset($instance['content_line_1']) ? esc_attr($instance['content_line_1']) : '';
        $content_line_2     = isset($instance['content_line_2']) ? esc_attr($instance['content_line_2']) : '';
        $short     = isset($instance['short']) ? esc_attr($instance['short']) : '';
        ?>
        <p>
			<label for="<?= $this->get_field_id('page'); ?>"><?php esc_html_e( 'Nhập id page cần hiển thị', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('page'); ?>" id="<?= $this->get_field_id('page') ?>" value="<?= $page; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('site'); ?>"><?php esc_html_e( 'Tên website', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('site'); ?>" id="<?= $this->get_field_id('site') ?>" value="<?= $site; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('content_line_1'); ?>"><?php esc_html_e( 'Nội dung dòng một', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('content_line_1'); ?>" id="<?= $this->get_field_id('content_line_1') ?>" value="<?= $content_line_1; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('content_line_2'); ?>"><?php esc_html_e( 'Nội dung dòng hai', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('content_line_2'); ?>" id="<?= $this->get_field_id('content_line_2') ?>" value="<?= $content_line_2; ?>">
        </p>
        <p>
			<label for="<?= $this->get_field_id('short'); ?>"><?php esc_html_e( 'Short code', 'halink' ); ?></label>
			<input type="text" class="widefat" name="<?= $this->get_field_name('short'); ?>" id="<?= $this->get_field_id('short') ?>" value="<?= $short; ?>">
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    { 
        $instance = $old_instance;
        $instance['page']     = sanitize_text_field($new_instance['page']);
        $instance['site']     = sanitize_text_field($new_instance['site']);
        $instance['content_line_1']     = sanitize_text_field($new_instance['content_line_1']);
        $instance['content_line_2']     = sanitize_text_field($new_instance['content_line_2']);
        $instance['short']     = sanitize_text_field($new_instance['short']);
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $page = apply_filters('widget_page', $instance['page'] );
        $site = apply_filters('widget_site', $instance['site'] );
        $content_line_1 = apply_filters('widget_content_line_1', $instance['content_line_1'] );
        $content_line_2 = apply_filters('widget_content_line_2', $instance['content_line_2'] );
        $short = apply_filters( 'widget_short', $instance['short'] );
        $query = new WP_Query(array(
            'page_id'    => $page
        ));
        ?>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 35px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid"></div>
                        <?php while($query->have_posts()) { $query->the_post(); ?>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space" style="height: 35px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: left;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497023187534">
                                        <?php the_title(); ?>
                                    </p>
                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_10 vc_sep_pos_align_left vc_separator_no_text vc_sep_color_grey">
                                        <span class="vc_sep_holder vc_sep_holder_l">
                                            <span class="vc_sep_line"></span>
                                        </span>
                                        <span class="vc_sep_holder vc_sep_holder_r">
                                            <span class="vc_sep_line"></span>
                                        </span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            <h2>
                                                <span style="font-size: 14pt;">
                                                    <strong>
                                                        <span style="font-family: tahoma, arial, helvetica, sans-serif;">
                                                            <span style="color: #58925b;">
                                                                <a style="color: #58925b; text-transform: uppercase;" href="<?php the_permalink(); ?>"><?= $site; ?></a>
                                                            </span>
                                                        </span>
                                                    </strong>
                                                </span>
                                            </h2>
                                            <p>
                                                <span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;"><?= $content_line_1; ?></span>
                                            </p>
                                            <p>
                                                <span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;"><?= $content_line_2; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class=" ubtn-ctn-left ">
                                        <a class="ubtn-link ult-adjust-bottom-margin ubtn-left ubtn-custom" rel='' href="<?php the_permalink(); ?>">
                                            <button type="button" id="ubtn-9839" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right ubtn-left tooltip-5d123326781eb" data-hover="#ffffff" data-border-color="#58925b" data-bg="#58925b" data-hover-bg="#58925b" data-border-hover="#58925b" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target='#ubtn-9839' data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:23px;"}' style="font-weight:normal;width:250px;min-height:45px;padding:px px;border-radius:4px;border-width:1px;border-color:#58925b;border-style:solid;background: #58925b;color: #ffffff;">
                                                <span class="ubtn-data ubtn-icon">
                                                    <i class="Defaults-arrow-circle-o-right" style="font-size:18px;color:#ffffff;"></i>
                                                </span>
                                                <span class="ubtn-hover" style="background-color:#58925b"></span>
                                                <span class="ubtn-data ubtn-text">XEM THÊM</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-5d12332678735" data-id="5d12332678735" data-height="35" data-height-mobile="5" data-height-tab="10" data-height-tab-portrait="10" data-height-mobile-landscape="5" style="clear:both;display:block;"></div>
                                    <div class="wpb_video_widget wpb_content_element vc_clearfix vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_video_wrapper">
                                                <?= do_shortcode("$short"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
