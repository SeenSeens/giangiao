<?php
class WG_Footer3 extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_footer3',
			'description'                 => __( 'Chân trang 3 phần này không có tùy chỉnh riêng bạn có thể vào contact form 7 để tạo mẫu mới.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'footer3', __( 'Chân trang 3' ), $widget_ops );
        $this->alt_option_name = 'WG_Footer3';
    }
    function widget($args, $instance)
    {
        ?>
        <div class="col medium-4 small-12 large-3">
            <div class="col-inner">
                <h4 class="uppercase">YÊU CẦU BÁO GIÁ</h4>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="max-width:1005px;background-color:rgb(15, 116, 188);"></div>
                </div>
                <!-- .divider -->
                <div role="form" class="wpcf7" id="wpcf7-f122-o1" lang="vi" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="http://giangiaophuhung.com/#wpcf7-f122-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="122" />
                            <input type="hidden" name="_wpcf7_version" value="4.9.1" />
                            <input type="hidden" name="_wpcf7_locale" value="vi" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f122-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="0" />
                        </div>
                        <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên (*)" /></span> </p>
                        <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email (*)" /></span> </p>
                        <p><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Số điện thoại" /></span> </p>
                        <p><span class="wpcf7-form-control-wrap your-message"><input type="text" name="your-message" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Lời nhắn" /></span> </p>
                        <p><input type="hidden" name="_wpcf7_captcha_challenge_captcha-1" value="1144177186" /><img class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha-1" width="72" height="24" alt="captcha" src="wp-content/uploads/wpcf7_captcha/1144177186.png" /> <span class="wpcf7-form-control-wrap captcha-1"><input type="text" name="captcha-1" value="" size="40" class="wpcf7-form-control wpcf7-captchar" autocomplete="off" aria-invalid="false" placeholder="Nhập mã xác nhận (*)" /></span><br />
                            <input type="submit" value="Gửi thông tin" class="wpcf7-form-control wpcf7-submit" /></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
}
