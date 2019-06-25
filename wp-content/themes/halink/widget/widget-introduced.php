<?php
class WG_Introduced extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_intro',
			'description'                 => __( 'Introduced' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'introduced', __( 'Introduced' ), $widget_ops );
        $this->alt_option_name = 'WG_Introduced';
    }
    function form($instance)
    { }
    function update($new_instance, $old_instance)
    { }
    function widget($args, $instance)
    {
        ?>
        <div class="container-fluid" style="margin-top: 5%;">
            <div class="row" style="margin-right: auto; margin-left: auto;">
                <div class="col-md-6 col-lg-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
                            </div>
                            <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: left;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497023187534">GIỚI THIỆU
                            </p>
                            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_10 vc_sep_pos_align_left vc_separator_no_text vc_sep_color_grey">
                                <span class="vc_sep_holder vc_sep_holder_l"><span
                                        class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span
                                        class="vc_sep_line"></span></span>
                            </div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2><span style="font-size: 14pt;"><strong><span
                                                    style="font-family: tahoma, arial, helvetica, sans-serif;"><span
                                                        style="color: #58925b;"><a
                                                            style="color: #58925b;"
                                                            href="index.html">GIÀN GIÁO
                                                            PHÚ HƯNG</a></span></span>
                                        </strong>
                                        </span>
                                    </h2>
                                    <p><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;">Công
                                            ty
                                            chúng tôi hoạt động trong lĩnh vực sản xuất giàn
                                            giáo và cung cấp các phụ kiện,
                                            thiết bị xây dựng cho các đối tác trên toàn quốc
                                            và nước ngoài.</span></p>
                                    <p><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;">Mục
                                            tiêu của chúng tôi là cung cấp những sản phẩm
                                            giàn giáo đạt chuẩn chất lượng cũng
                                            như giá tốt nhất đến với Khách Hàng.</span></p>

                                </div>
                            </div>
                            <div class=" ubtn-ctn-left "><a class="ubtn-link ult-adjust-bottom-margin ubtn-left ubtn-custom " rel='' href="gioi-thieu/index.html"><button
                                        type="button" id="ubtn-7919"
                                        class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-left   tooltip-5d107e29adad7"
                                        data-hover="#ffffff" data-border-color="#58925b"
                                        data-bg="#58925b" data-hover-bg="#58925b"
                                        data-border-hover="#58925b" data-shadow-hover=""
                                        data-shadow-click="none" data-shadow=""
                                        data-shd-shadow="" data-ultimate-target='#ubtn-7919'
                                        data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:23px;"}'
                                        style="font-weight:normal;width:250px;min-height:45px;padding:px px;border-radius:4px;border-width:1px;border-color:#58925b;border-style:solid;background: #58925b;color: #ffffff;"><span
                                            class="ubtn-data ubtn-icon"><i
                                                class="Defaults-arrow-circle-o-right"
                                                style="font-size:18px;color:#ffffff;"></i></span><span
                                            class="ubtn-hover"
                                            style="background-color:#58925b"></span><span
                                            class="ubtn-data ubtn-text ">XEM
                                            THÊM</span></button></a></div>
                            <h1 style="font-size: 28px;color: #ffffff;line-height: 1.3;text-align: left;font-family:Roboto Condensed;font-weight:300;font-style:normal" class="vc_custom_heading h1-hidden">Giàn Giáo Phú Hưng | Giàn giáo xây dựng chất lượng cao
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="ult-spacer spacer-5d107e29adffd" data-id="5d107e29adffd" data-height="35" data-height-mobile="5" data-height-tab="10" data-height-tab-portrait="10" data-height-mobile-landscape="5" style="clear:both;display:block;"></div>
                            <div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center">
                                <div class="wpb_wrapper">

                                    <div class="wpb_video_wrapper"><iframe width="1020" height="574" src="https://www.youtube.com/embed/UrzS1Z3kn4M?feature=oembed" frameborder="0" allowfullscreen></iframe></div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
