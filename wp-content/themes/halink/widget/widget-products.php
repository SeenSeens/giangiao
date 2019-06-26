<?php
class WG_Products extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_products',
			'description'                 => __( 'Products' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'products', __( 'Products' ), $widget_ops );
        $this->alt_option_name = 'WG_Products';
    }
    function form($instance)
    { }
    function update($new_instance, $old_instance)
    { }
    function widget($args, $instance)
    {
        ?>
        <div class="container-fluid">
            <div class="row" style="margin-right: auto; margin-left: auto;">
                <div class="container">
                    <h2 style="text-align: center;">SẢN PHẨM CỦA CHÚNG TÔI</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p style="text-align: center; font-family: tahoma, arial, helvetica, sans-serif; color: #339966;">Với hệ thống máy móc hiện đại cùng đội ngũ công nhân, kỹ sư tay nghề cao, giàu kinh nghiệm – Sản phẩm của PHÚ HƯNG được sản xuất trên nền công nghệ hiện đại, chất lượng luôn đạt chuẩn ở mọi giai đoạn sản xuất nhằm đảm bảo sản phẩm của mình an toàn cho mọi người, mọi công trình và thân thiện với môi trường.</p>
                        </div>
                    </div>
                </div>               
            </div>
            <div class="row" style="margin-right: auto; margin-left: auto;">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div>
                        <img class="vc_single_image-img " src="http://giangiaophuhung.com/wp-content/uploads/2017/05/gian-giao-khung-350x230.jpg" width="350" height="230" alt="gian-giao-khung" title="gian-giao-khung">
                    </div>
                    <div>
                        <a href="">
                            <button type="button" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-left-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-center   tooltip-5d11d53bc118a">
                                <span>GIÀN GIÁO KHUNG</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
