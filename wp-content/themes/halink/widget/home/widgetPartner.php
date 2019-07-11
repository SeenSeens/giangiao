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
    }
    function update($new_instance, $old_instance)
    { 
    }
    function widget($args, $instance)
    {   
        ?>
        <div class="upb_color" data-bg-override="full" data-bg-color="#f2f2f2" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.1.1" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497577340664">ĐỐI TÁC</p>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_30 vc_sep_shadow vc_sep_pos_align_center vc_separator_no_text vc_sep_color_chino"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
                        </div>
                        <div id="ult-carousel-3223880775d1489259e6c8" class="ult-carousel-wrapper   ult_horizontal" data-gutter="15" data-rtl="false">
                            <div class="ult-carousel-7468666775d1489259e62c ">
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371536713">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="wp-content/uploads/2017/05/vingroup.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup-300x187.jpg 300w"
                                                    sizes="(max-width: 414px) 100vw, 414px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371515591">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="wp-content/uploads/2017/05/novaland.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland-300x187.jpg 300w"
                                                    sizes="(max-width: 414px) 100vw, 414px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515373902">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="wp-content/uploads/2017/05/coteccons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons-300x187.jpg 300w"
                                                    sizes="(max-width: 414px) 100vw, 414px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515391287">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="wp-content/uploads/2017/05/unicons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons-300x187.jpg 300w"
                                                    sizes="(max-width: 414px) 100vw, 414px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515409624">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="wp-content/uploads/2017/05/delta.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/delta-300x187.jpg 300w"
                                                    sizes="(max-width: 414px) 100vw, 414px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2017/05/logo-3-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3.jpg 163w"
                                                    sizes="(max-width: 150px) 100vw, 150px" /></div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                    <div class="wpb_single_image wpb_content_element vc_align_left">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="wp-content/uploads/2017/05/logo-4-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4.jpg 163w"
                                                    sizes="(max-width: 150px) 100vw, 150px" /></div>
                                        </figure>
                                    </div>
                                </div>
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
