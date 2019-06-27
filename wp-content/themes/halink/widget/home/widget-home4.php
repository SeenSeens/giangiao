<?php
class WG_Home4 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home_4',
			'description'                 => __( 'Phần này hiển hiện slider tin tức (mục này test) phần này dùng chung với slider bài viết trên trang chủ' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home_4', __( 'Slider tin tức' ), $widget_ops );
        $this->alt_option_name = 'WG_Home4';
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
        <div class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill" data-rtl="false" style="position: relative;" data-row-effect-mobile-disable="true">
            <div class="upb_row_bg" data-bg-override="full" style="background: rgb(242, 242, 242); min-width: 1349px; left: -87px; width: 1349px;"></div>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <h3 style="font-size: 23px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1500716451871">TIN TỨC GIÀN GIÁO</h3>
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_30 vc_sep_shadow vc_sep_pos_align_center vc_separator_no_text vc_sep_color_chino"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                        </div>
                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                        <!-- vc_grid start -->
                        <div class="vc_grid-container-wrapper vc_clearfix">
                            <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:4,&quot;style&quot;:&quot;pagination&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1509191486010-721dc0a2-03a7-4&quot;,&quot;items_per_page&quot;:&quot;4&quot;,&quot;auto_play&quot;:false,&quot;gap&quot;:30,&quot;speed&quot;:-1000,&quot;loop&quot;:&quot;&quot;,&quot;animation_in&quot;:&quot;&quot;,&quot;animation_out&quot;:&quot;&quot;,&quot;arrows_design&quot;:&quot;none&quot;,&quot;arrows_color&quot;:&quot;blue&quot;,&quot;arrows_position&quot;:&quot;inside&quot;,&quot;paging_design&quot;:&quot;radio_dots&quot;,&quot;paging_color&quot;:&quot;grey&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}" data-vc-request="http://giangiaophuhung.com/wp-admin/admin-ajax.php" data-vc-post-id="4" data-vc-public-nonce="a2f490de42">
                                <div class="vc_grid-loading" style="display: none;"></div>
                                <style type="text/css" data-type="vc_shortcodes-custom-css">
                                    .vc_custom_1497675458847 {
                                        background-color: #f9f9f9 !important;
                                    }
                                    
                                    .vc_custom_1497675477789 {
                                        margin-right: 5px !important;
                                        margin-left: 5px !important;
                                    }
                                </style>
                                <style type="text/css">
                                    img.wp-smiley,
                                    img.emoji {
                                        display: inline !important;
                                        border: none !important;
                                        box-shadow: none !important;
                                        height: 1em !important;
                                        width: 1em !important;
                                        margin: 0 .07em !important;
                                        vertical-align: -0.1em !important;
                                        background: none !important;
                                        padding: 0 !important;
                                    }
                                </style>
                                <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover owl-carousel vc_grid-owl-theme owl-loaded owl-drag" data-vc-pageable-content="true">
                                    <div class="owl-stage-outer owl-height" style="height: 385px;">
                                        <div class="owl-stage" style="transform: translate3d(-3465px, 0px, 0px); transition: all 0.25s ease 0s; width: 5775px;">
                                            <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/04/gian-giao-khung-01.png') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/ung-dung-gian-giao-khung/" title="Ứng dụng của giàn giáo khung trong xây dựng?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/04/gian-giao-khung-01.png" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Ứng dụng của giàn giáo khung trong xây dựng?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/04/banh-xe-chan-gian-giao.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/banh-xe-chan-gian-giao-d200/" title="Cung cấp bánh xe chân giàn giáo chất lượng, giá tốt nhất" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/04/banh-xe-chan-gian-giao.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Cung cấp bánh xe chân giàn giáo chất lượng, giá tốt nhất</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/03/gian-giao-nhung-kem-01.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/gian-giao-nhung-kem-nong-la-gi/" title="Giàn giáo nhúng kẽm nóng là gì?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/03/gian-giao-nhung-kem-01.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Giàn giáo nhúng kẽm nóng là gì?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/03/mot-bo-gian-giao-bao-nhieu-chan-01.png') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/mot-bo-gian-giao-bao-nhieu-chan/" title="Một bộ giàn giáo bao nhiêu chân?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/03/mot-bo-gian-giao-bao-nhieu-chan-01.png" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Một bộ giàn giáo bao nhiêu chân?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/03/cum-co-dinh-ong-d49.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cum-co-dinh-ong-d49-va-ung-dung-cua-no-trong-he-gian-giao/" title="Cùm cố định ống D49 và ứng dụng của nó?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/03/cum-co-dinh-ong-d49.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Cùm cố định ống D49 và ứng dụng của nó?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/01/gian-giao-xay-dung-gia-re.png') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/gian-giao-xay-dung-gia-re-can-tim-hieu-ky-don-vi-chao-gia/" title="Giàn giáo xây dựng giá rẻ – cần tìm hiểu kỹ đơn vị chào giá" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/01/gian-giao-xay-dung-gia-re.png" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Giàn giáo xây dựng giá rẻ – cần tìm hiểu kỹ đơn vị chào giá</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/01/tam-lot-san-gian-giao-03.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/tam-lot-san-va-cong-dung-cua-no-trong-gian-giao/" title="Tấm lót sàn và công dụng của nó trong hệ giàn giáo ?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/01/tam-lot-san-gian-giao-03.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Tấm lót sàn và công dụng của nó trong hệ giàn giáo ?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/01/cop-pha-nhom.png') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/ung-dung-cua-cop-pha-nhom-van-khuon-dinh-hinh/" title="Ứng dụng của cốp pha nhôm ván khuôn định hình ?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/01/cop-pha-nhom.png" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Ứng dụng của cốp pha nhôm ván khuôn định hình ?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/01/cop-pha-la-gi-01.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cop-pha-la-gi-cop-pha-hay-cot-pha/" title="Cốp pha là gì? Cốp pha hay cốt pha?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/01/cop-pha-la-gi-01.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Cốp pha là gì? Cốp pha hay cốt pha?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2018/01/quy-trinh-lap-dung-gian-giao-01.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/huong-dan-quy-trinh-lap-dung-gian-giao-dung-quy-cach/" title="Hướng dẫn quy trình lắp dựng giàn giáo đúng quy cách" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2018/01/quy-trinh-lap-dung-gian-giao-01.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Hướng dẫn quy trình lắp dựng giàn giáo đúng quy cách</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-hay-dan-giao-02.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/gian-giao-hay-dan-giao-cach-viet-nao-dung/" title="Giàn giáo hay dàn giáo? Cách viết nào đúng nhất?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-hay-dan-giao-02.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Giàn giáo hay dàn giáo? Cách viết nào đúng nhất?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-nhat-ban-01.png') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cach-nguoi-nhat-tuyen-lao-dong-lam-gian-giao-tai-nhat-ban/" title="Cách người Nhật tuyển lao động làm giàn giáo tại Nhật Bản" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-nhat-ban-01.png" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Cách người Nhật tuyển lao động làm giàn giáo tại Nhật Bản</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-da-qua-su-dung.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/co-nen-su-dung-gian-giao-da-qua-su-dung/" title="Có nên dùng giàn giáo đã qua sử dụng?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/12/gian-giao-da-qua-su-dung.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Có nên dùng giàn giáo đã qua sử dụng?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/12/mam-gian-giao-bs1139-03.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/mam-gian-giao-tieu-chuan-bs1139/" title="Mâm giàn giáo tiêu chuẩn BS1139" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/12/mam-gian-giao-bs1139-03.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Mâm giàn giáo tiêu chuẩn BS1139</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/banh-xe-gian-giao-consol-01.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cong-dung-cua-banh-xe-gian-giao-chan-day-colson/" title="Công dụng của bánh xe giàn giáo đẩy Colson" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/banh-xe-gian-giao-consol-01.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Công dụng của bánh xe giàn giáo đẩy Colson</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/Cay-chong-thep-04.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/thong-ky-thuat-cay-chong-thep-can-nam/" title="Thông số kỹ thuật cây chống thép cần nắm" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/Cay-chong-thep-04.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Thông số kỹ thuật cây chống thép cần nắm</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 1145px; margin-right: 10px;">
                                                <div class="vc_pageable-slide-wrapper">
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/cum-gian-giao-bs1139-1024x1024.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cac-loai-cum-gian-giao-theo-tieu-chuan-bs1139-hien-nay/" title="Các loại cùm giàn giáo theo tiêu chuẩn BS1139 hiện nay" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/cum-gian-giao-bs1139-1024x1024.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Các loại cùm giàn giáo theo tiêu chuẩn BS1139 hiện nay</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/bien-phap-thi-cong-gian-giao-nha-cao-tang-01.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/cac-bien-phap-thi-cong-gian-giao-cho-nha-cao-tang/" title="Các biện pháp thi công giàn giáo cho nhà cao tầng" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/bien-phap-thi-cong-gian-giao-nha-cao-tang-01.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Các biện pháp thi công giàn giáo cho nhà cao tầng</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/gian-giao-bao-che-1024x702.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/vi-sao-phai-lap-dung-gian-giao-bao-che-cho-cong-trinh/" title="Vì sao phải lắp dựng giàn giáo bao che cho công trình?" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/gian-giao-bao-che-1024x702.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Vì sao phải lắp dựng giàn giáo bao che cho công trình?</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                    <div class="vc_grid-item vc_clearfix vc_col-sm-3 vc_grid-item-zone-c-bottom vc_visible-item fadeIn animated">
                                                        <div class="vc_grid-item-mini vc_clearfix ">
                                                            <div class="vc_gitem-animated-block ">
                                                                <div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('http://giangiaophuhung.com/wp-content/uploads/2017/11/van-ep-coppha-phu-phim-03.jpg') !important;">
                                                                    <a href="http://giangiaophuhung.com/tin-tuc/phu-hung-cung-cap-van-ep-cop-pha-phu-phim-gia-tot/" title="Phú Hưng cung cấp ván ép cốp pha phủ phim giá tốt" class="vc_gitem-link vc-zone-link"></a> <img src="http://giangiaophuhung.com/wp-content/uploads/2017/11/van-ep-coppha-phu-phim-03.jpg" class="vc_gitem-zone-img" alt="">
                                                                    <div class="vc_gitem-zone-mini">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_gitem-zone vc_gitem-zone-c vc_custom_1497675458847">
                                                                <div class="vc_gitem-zone-mini">
                                                                    <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                        <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                            <div class="vc_custom_heading vc_custom_1497675477789 vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                <h4 style="text-align: left">Phú Hưng cung cấp ván ép cốp pha phủ phim giá tốt</h4></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_grid-owl-nav vc_grid-owl-nav-color-blue">
                                        <div class="vc_grid-owl-prev none vc_grid-nav-prev-inside"></div>
                                        <div class="vc_grid-owl-next none vc_grid-nav-next-inside"></div>
                                    </div>
                                    <div class="vc_grid-owl-dots vc_grid-radio_dots vc_grid-owl-dots-color-grey">
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                        <div class="vc_grid-owl-dot active"><span></span></div>
                                        <div class="vc_grid-owl-dot"><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- vc_grid end -->
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
