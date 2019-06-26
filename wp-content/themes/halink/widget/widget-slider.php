<?php
class WG_Slider extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_slider',
			'description'                 => __( 'Slider' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'slider', __( 'Slider' ), $widget_ops );
        $this->alt_option_name = 'WG_Slider';
    }
    function form($instance)
    { }
    function update($new_instance, $old_instance)
    { }
    function widget($args, $instance)
    {
        ?>
        <a class="nav-top-link">
            <div class="slider-wrapper relative " id="slider-10153879">
                <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options='{
                    "cellAlign": "center",
                    "imagesLoaded": true,
                    "lazyLoad": 1,
                    "freeScroll": false,
                    "wrapAround": true,
                    "autoPlay": 6000,
                    "pauseAutoPlayOnHover" : true,
                    "prevNextButtons": true,
                    "contain" : true,
                    "adaptiveHeight" : true,
                    "dragThreshold" : 5,
                    "percentPosition": true,
                    "pageDots": true,
                    "rightToLeft": false,
                    "draggable": true,
                    "selectedAttraction": 0.1,
                    "parallax" : 0,
                    "friction": 0.6
                }'>
                    <div class="banner has-hover" id="banner-650490134">
                        <div class="banner-inner fill">
                            <div class="banner-bg fill">
                                <div class="bg fill bg-fill "></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- bg-layers -->
                            <div class="banner-layers container">
                                <div class="fill banner-link"></div>
                                <div id="text-box-144505667" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                    <div class="text dark">
                                        <div class="text-inner text-center">
                                            <h2 class="uppercase thin-font" style="text-align: center;">KHÔNG CÓ CÔNG VIỆC NÀO QUÁ LỚN</h2>
                                            <h2 class="uppercase thin-font" style="text-align: center;">ĐỐI VỚI CHÚNG TÔI</h2>
                                        </div>
                                    </div>
                                    <!-- text-box-inner -->
                                    <style scope="scope">
                                        #text-box-144505667 {
                                            width: 99%;
                                        }                                    
                                        #text-box-144505667 .text {
                                            font-size: 100%;
                                        }
                                    </style>
                                </div>
                                <!-- text-box -->
                            </div>
                            <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                            #banner-650490134 {
                                padding-top: 500px;
                            }                        
                            #banner-650490134 .bg.bg-loaded {
                                background: url("../wp-content/themes/halink/images/slider-homepage-color.jpg");
                            }                       
                            #banner-650490134 .overlay {
                                background-color: rgba(0, 0, 0, 0.17);
                            }                        
                            #banner-650490134 .bg {
                                background-position: 50% 58%;
                            }                    
                            @media (min-width:550px) {
                                #banner-650490134 {
                                    padding-top: 920px;
                                }
                            }                        
                            @media (min-width:850px) {
                                #banner-650490134 {
                                    padding-top: 600px;
                                }
                            }
                        </style>
                    </div>
                    <!-- .banner -->
                    <div class="banner has-hover" id="banner-771577459">
                        <div class="banner-inner fill">
                            <div class="banner-bg fill">
                                <div class="bg fill bg-fill "></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- bg-layers -->
                            <div class="banner-layers container">
                                <div class="fill banner-link"></div>
                                <div id="text-box-871447514" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                    <div class="text dark">
                                        <div class="text-inner text-center">
                                            <h2 class="uppercase thin-font" style="text-align: center;">SẢN PHẨM CHẤT LƯỢNG, AN TOÀN</h2>
                                            <h2 class="uppercase thin-font" style="text-align: center;">CHO MỌI CÔNG TRÌNH</h2>
                                        </div>
                                    </div>
                                    <!-- text-box-inner -->
                                    <style scope="scope">
                                        #text-box-871447514 {
                                            width: 99%;
                                        }                                    
                                        #text-box-871447514 .text {
                                            font-size: 100%;
                                        }
                                    </style>
                                </div>
                                <!-- text-box -->
                            </div>
                            <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                            #banner-771577459 {
                                padding-top: 500px;
                            }                        
                            #banner-771577459 .bg.bg-loaded {
                                background-image: url(images/slider-homepage-color-2.jpg);
                            }                       
                            #banner-771577459 .overlay {
                                background-color: rgba(0, 0, 0, 0.17);
                            }                        
                            #banner-771577459 .bg {
                                background-position: 50% 58%;
                            }                        
                            @media (min-width:550px) {
                                #banner-771577459 {
                                    padding-top: 920px;
                                }
                            }                       
                            @media (min-width:850px) {
                                #banner-771577459 {
                                    padding-top: 600px;
                                }
                            }
                        </style>
                    </div>
                    <!-- .banner -->
                    <div class="banner has-hover" id="banner-112397224">
                        <div class="banner-inner fill">
                            <div class="banner-bg fill">
                                <div class="bg fill bg-fill "></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- bg-layers -->
                            <div class="banner-layers container">
                                <div class="fill banner-link"></div>
                                <div id="text-box-1136467105" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                    <div class="text dark">
                                        <div class="text-inner text-center">
                                            <h2 class="uppercase thin-font" style="text-align: center;">sáng tạo không ngừng làm nên sựmới mẻ và phát triển từng ngày</h2>
                                        </div>
                                    </div>
                                    <!-- text-box-inner -->
                                    <style scope="scope">
                                        #text-box-1136467105 {
                                            width: 99%;
                                        }                                   
                                        #text-box-1136467105 .text {
                                            font-size: 100%;
                                        }
                                    </style>
                                </div>
                                <!-- text-box -->
                            </div>
                            <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                            #banner-112397224 {
                                padding-top: 500px;
                            }                       
                            #banner-112397224 .bg.bg-loaded {
                                background-image: url(images/slide-gian-giao-phu-hung-4.jpg);
                            }                        
                            #banner-112397224 .overlay {
                                background-color: rgba(0, 0, 0, 0.17);
                            }                       
                            #banner-112397224 .bg {
                                background-position: 50% 58%;
                            }                       
                            @media (min-width:550px) {
                                #banner-112397224 {
                                    padding-top: 920px;
                                }
                            }                        
                            @media (min-width:850px) {
                                #banner-112397224 {
                                    padding-top: 600px;
                                }
                            }
                        </style>
                    </div>
                    <!-- .banner -->
                    <div class="banner has-hover" id="banner-1728304443">
                        <div class="banner-inner fill">
                            <div class="banner-bg fill">
                                <div class="bg fill bg-fill "></div>
                                <div class="overlay"></div>
                            </div>
                            <!-- bg-layers -->
                            <div class="banner-layers container">
                                <div class="fill banner-link"></div>
                                <div id="text-box-1839619984" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                    <div class="text dark">
                                        <div class="text-inner text-center">
                                            <h2 class="uppercase thin-font" style="text-align: center;">Bạn đang chọn đúng người để được phục vụ</h2>
                                        </div>
                                    </div>
                                    <!-- text-box-inner -->
                                    <style scope="scope">
                                        #text-box-1839619984 {
                                            width: 99%;
                                        }                                    
                                        #text-box-1839619984 .text {
                                            font-size: 100%;
                                        }
                                    </style>
                                </div>
                                <!-- text-box -->
                            </div>
                            <!-- .banner-layers -->
                        </div>
                        <!-- .banner-inner -->
                        <style scope="scope">
                            #banner-1728304443 {
                                padding-top: 500px;
                            }
                            #banner-1728304443 .bg.bg-loaded {
                                background-image: url(images/slide-gian-giao-phu-hung-2.jpg);
                            }                        
                            #banner-1728304443 .overlay {
                                background-color: rgba(0, 0, 0, 0.17);
                            }                       
                            #banner-1728304443 .bg {
                                background-position: 50% 58%;
                            }                        
                            @media (min-width:550px) {
                                #banner-1728304443 {
                                    padding-top: 920px;
                                }
                            }                        
                            @media (min-width:850px) {
                                #banner-1728304443 {
                                    padding-top: 600px;
                                }
                            }
                        </style>
                    </div>
                    <!-- .banner -->
                </div>
                <div class="loading-spin dark large centered"></div>
                <style scope="scope">
                </style>
            </div>
            <!-- .ux-slider-wrapper -->
        </a>
        <?php
    }
}
