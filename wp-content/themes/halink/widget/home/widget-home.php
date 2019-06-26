<?php
class WG_Home extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_home',
			'description'                 => __( 'Trang chủ dòng 1' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'home', __( 'Trang chủ' ), $widget_ops );
        $this->alt_option_name = 'WG_Home';
    }
    function form($instance)
    { 
        $defaults = array('page' => '');
        $instance = wp_parse_args($instance, $defaults);
        $page = esc_attr($instance['page']);
        ?>
        <p>
			<!-- esc_html_e : Hiển thị văn bản dịch, nếu không có bản dịch văn bản gốc được hiển thị -->
			<label for="<?= $this->get_field_id('page'); ?>"><?php esc_html_e( 'Bạn muốn trang nào được hiển thị ra ngoài?', 'halink' ); ?></label>
            <select name="<?= $this->get_field_id('page'); ?>" id="<?= $this->get_field_id('page'); ?>" style='width:50%;margin-left:5px'>
                <option value="">Bất kỳ</option>
                <?php
                $query = new WP_Query(array('post_type' => 'post'));
                while ( $query->have_posts() ) : $query->the_post();
                    ?><option value=""><?= the_title(); ?></option><?php
                endwhile;
                ?>
            </select>
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
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid"></div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                                    <p style="font-size: 28px;color: #327d57;line-height: 1.3;text-align: left;font-family:Roboto Condensed;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1497023187534">GIỚI THIỆU</p>
                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_10 vc_sep_pos_align_left vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span  class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h2><span style="font-size: 14pt;"><strong><span style="font-family: tahoma, arial, helvetica, sans-serif;"><span style="color: #58925b;"><a style="color: #58925b;" href="index.html">GIÀN GIÁO PHÚ HƯNG</a></span></span>
                                                </strong>
                                                </span>
                                            </h2>
                                            <p><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;">Công ty chúng tôi hoạt động trong lĩnh vực sản xuất giàn giáo và cung cấp các phụ kiện, thiết bị xây dựng cho các đối tác trên toàn quốc và nước ngoài.</span></p>
                                            <p><span style="font-family: tahoma, arial, helvetica, sans-serif; font-size: 12pt;">Mục tiêu của chúng tôi là cung cấp những sản phẩm giàn giáo đạt chuẩn chất lượng cũng như giá tốt nhất đến với Khách Hàng.</span></p>

                                        </div>
                                    </div>
                                    <div class=" ubtn-ctn-left "><a class="ubtn-link ult-adjust-bottom-margin ubtn-left ubtn-custom " rel='' href="gioi-thieu/index.html"><button type="button" id="ubtn-9839" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-left   tooltip-5d123326781eb"  data-hover="#ffffff" data-border-color="#58925b" data-bg="#58925b" data-hover-bg="#58925b" data-border-hover="#58925b" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow=""  data-ultimate-target='#ubtn-9839'  data-responsive-json-new='{"font-size":"desktop:16px;","line-height":"desktop:23px;"}'  style="font-weight:normal;width:250px;min-height:45px;padding:px px;border-radius:4px;border-width:1px;border-color:#58925b;border-style:solid;background: #58925b;color: #ffffff;"><span class="ubtn-data ubtn-icon"><i class="Defaults-arrow-circle-o-right" style="font-size:18px;color:#ffffff;"></i></span><span class="ubtn-hover" style="background-color:#58925b"></span><span class="ubtn-data ubtn-text " >XEM THÊM</span></button></a></div>
                                    <h1 style="font-size: 28px;color: #ffffff;line-height: 1.3;text-align: left;font-family:Roboto Condensed;font-weight:300;font-style:normal" class="vc_custom_heading h1-hidden">Giàn Giáo Phú Hưng | Giàn giáo xây dựng chất lượng cao</h1>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-5d12332678735" data-id="5d12332678735" data-height="35" data-height-mobile="5" data-height-tab="10" data-height-tab-portrait="10" data-height-mobile-landscape="5" style="clear:both;display:block;"></div>
                                    <div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center">
                                        <div class="wpb_wrapper">

                                            <div class="wpb_video_wrapper"><iframe width="1020" height="574" src="https://www.youtube.com/embed/UrzS1Z3kn4M?feature=oembed" frameborder="0" allowfullscreen></iframe></div>
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
