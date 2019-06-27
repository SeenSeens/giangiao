<?php
class WG_Home5 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home_5',
			'description'                 => __( 'Phần này hiển thị danh sách các đối tác.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home_5', __( 'Đối tác' ), $widget_ops );
        $this->alt_option_name = 'WG_Home5';
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
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497577340664">ĐỐI TÁC</p>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_30 vc_sep_shadow vc_sep_pos_align_center vc_separator_no_text vc_sep_color_chino"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                        <div id="ult-carousel-12837876945d1489184c4dc" class="ult-carousel-wrapper   ult_horizontal" data-gutter="15" data-rtl="false">
                            <div class="ult-carousel-19142698625d1489184c448  slick-initialized slick-slider">
                                <button type="button" role="button" aria-label="Previous" style="color: rgb(51, 51, 51); font-size: 20px; display: block;" class="slick-prev default slick-arrow"><i class="ultsl-arrow-left4"></i></button>
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 3893px; transform: translate3d(-1603px, 0px, 0px);" role="listbox">
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-5" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515373902">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-4" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515391287">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-3" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515409624">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/delta-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-2" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3.jpg 163w" sizes="(max-width: 150px) 100vw, 150px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-1" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4.jpg 163w" sizes="(max-width: 150px) 100vw, 150px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide animated no-animation" data-animation="animated no-animation" data-slick-index="0" aria-hidden="true" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371536713">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide animated no-animation" data-animation="animated no-animation" data-slick-index="1" aria-hidden="true" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371515591">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="2" aria-hidden="false" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515373902">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="3" aria-hidden="false" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515391287">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="4" aria-hidden="false" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide04">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515409624">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/delta-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-current slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="5" aria-hidden="false" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide05">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-3.jpg 163w" sizes="(max-width: 150px) 100vw, 150px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="6" aria-hidden="false" style="width: 199px;" tabindex="-1" role="option" aria-describedby="slick-slide06">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="150" height="150" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4-150x150.jpg" class="vc_single_image-img attachment-thumbnail" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4-150x150.jpg 150w, http://giangiaophuhung.com/wp-content/uploads/2017/05/logo-4.jpg 163w" sizes="(max-width: 150px) 100vw, 150px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned animated no-animation" data-animation="animated no-animation" data-slick-index="7" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371536713">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/vingroup-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned animated no-animation" data-animation="animated no-animation" data-slick-index="8" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497371515591">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/novaland-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned animated no-animation" data-animation="animated no-animation" data-slick-index="9" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515373902">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/coteccons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned animated no-animation" data-animation="animated no-animation" data-slick-index="10" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515391287">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/unicons-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="11" aria-hidden="true" style="width: 199px;" tabindex="-1">
                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1497515409624">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="414" height="258" src="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://giangiaophuhung.com/wp-content/uploads/2017/05/delta.jpg 414w, http://giangiaophuhung.com/wp-content/uploads/2017/05/delta-300x187.jpg 300w" sizes="(max-width: 414px) 100vw, 414px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" role="button" aria-label="Next" style="color: rgb(51, 51, 51); font-size: 20px; display: block;" class="slick-next default slick-arrow"><i class="ultsl-arrow-right4"></i></button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function($) {
                                $('.ult-carousel-19142698625d1489184c448').slick({
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
