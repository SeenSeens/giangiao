<?php
class WG_Partner extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_partner',
			'description'                 => __( 'Đối tác' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'partner', __( 'Đối tác' ), $widget_ops );
        $this->alt_option_name = 'WG_Partner';
    }
    function form($instance)
    {
        $instance = wp_parse_args($instance);
        $shortcode     = isset($instance['shortcode']) ? esc_attr($instance['shortcode']) : '';
        ?>
        <p>
            <label for="<?= $this->get_field_id('shortcode'); ?>"><?php _e('Partner:'); ?></label>
            <input class="widefat" id="<?= $this->get_field_id('shortcode'); ?>" name="<?= $this->get_field_name('shortcode'); ?>" type="text" value="<?= $shortcode; ?>" />
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['shortcode']     = sanitize_text_field($new_instance['shortcode']);
        return $instance; 
    }
    function widget($args, $instance)
    {   
        extract($args);
        $shortcode = apply_filters( 'widget_shortcode', $instance['shortcode'] );
        ?>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497577340664">ĐỐI TÁC</p>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_30 vc_sep_shadow vc_sep_pos_align_center vc_separator_no_text vc_sep_color_chino"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                        <div id="ult-carousel-3223880775d1489259e6c8" class="ult-carousel-wrapper ult_horizontal" data-gutter="15" data-rtl="false">
                            <div class="ult-carousel-7468666775d1489259e62c">
                                <?php
                                $post_id = do_shortcode("$shortcode");
                                $result = get_post_meta($post_id, 'vdw_gallery_id', true);
                                foreach ($result as $val) {
                                    $img = wp_get_attachment_image_src($val, 'full');
                                ?>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371536713">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                <img src='<?= $img[0] ?>'>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function($) {
                                $('.ult-carousel-7468666775d1489259e62c').slick({
                                    dots: false,
                                    autoplay: true,
                                    autoplaySpeed: 5000,
                                    speed: 300,
                                    infinite: true,
                                    arrows: true,
                                    nextArrow: '<button type="button" role="button" aria-label="Next" style="color:#333333; font-size:20px;" class="slick-next default"><i class="ultsl-arrow-right4"></i></button>',
                                    prevArrow: '<button type="button" role="button" aria-label="Previous" style="color:#333333; font-size:20px;" class="slick-prev default"><i class="ultsl-arrow-left4"></i></button>',
                                    slidesToScroll: 5,
                                    slidesToShow: 5,
                                    swipe: true,
                                    draggable: true,
                                    touchMove: true,
                                    pauseOnHover: true,
                                    responsive: [{
                                        breakpoint: 1025,
                                        settings: {
                                            slidesToShow: 5,
                                            slidesToScroll: 5,
                                        }
                                    }, {
                                        breakpoint: 769,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3
                                        }
                                    }, {
                                        breakpoint: 481,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    }],
                                    pauseOnDotsHover: true,
                                    customPaging: function(slider, i) {
                                        return '<i type="button" style=&quot;color:#333333;&quot; class="ultsl-record" data-role="none"></i>';
                                    },
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
