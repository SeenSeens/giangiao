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
    { 

    }
    function update($new_instance, $old_instance)
    {   }
    function widget($args, $instance)
    {
        ?>
        <div class="slider-wrapper relative" id="slider-598019828">
            <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal" data-flickity-options=' {
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
                <div class="banner has-hover" id="banner-75065714">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill"></div>
                            <div class="overlay"></div>
                        </div>
                        <!-- bg-layers -->
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-1565817642" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">
                                    <div class="text-inner text-center">
                                        <h2 class="uppercase thin-font" style="text-align: center;">KHÔNG CÓ CÔNG VIỆC NÀO QUÁ LỚN</h2>
                                        <h2 class="uppercase thin-font" style="text-align: center;">ĐỐI VỚI CHÚNG TÔI</h2>
                                    </div>
                                </div>
                                <!-- text-box-inner -->
                                <style scope="scope">
                                    #text-box-1565817642 {
                                        width: 99%;
                                    }                                    
                                    #text-box-1565817642 .text {
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
                        #banner-75065714 {
                            padding-top: 500px;
                        }                        
                        #banner-75065714 .bg.bg-loaded {
                            background-image: url(http://127.0.0.1/giangiao/wp-content/uploads/2017/05/slider-homepage-color.jpg);
                        }                        
                        #banner-75065714 .overlay {
                            background-color: rgba(0, 0, 0, 0.17);
                        }                        
                        #banner-75065714 .bg {
                            background-position: 50% 58%;
                        }                        
                        @media (min-width:550px) {
                            #banner-75065714 {
                                padding-top: 920px;
                            }
                        }                        
                        @media (min-width:850px) {
                            #banner-75065714 {
                                padding-top: 600px;
                            }
                        }
                    </style>
                </div>
                <!-- .banner -->

                <div class="banner has-hover" id="banner-306842837">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                            <div class="overlay"></div>
                        </div>
                        <!-- bg-layers -->
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-1772227139" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">
                                    <div class="text-inner text-center">
                                        <h2 class="uppercase thin-font" style="text-align: center;">SẢN PHẨM CHẤT LƯỢNG, AN TOÀN</h2>
                                        <h2 class="uppercase thin-font" style="text-align: center;">CHO MỌI CÔNG TRÌNH</h2>
                                    </div>
                                </div>
                                <!-- text-box-inner -->
                                <style scope="scope">
                                    #text-box-1772227139 {
                                        width: 99%;
                                    }                                    
                                    #text-box-1772227139 .text {
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
                        #banner-306842837 {
                            padding-top: 500px;
                        }
                        
                        #banner-306842837 .bg.bg-loaded {
                            background-image: url(http://127.0.0.1/giangiao/wp-content/uploads/2017/06/slider-homepage-color-2.jpg);
                        }
                        
                        #banner-306842837 .overlay {
                            background-color: rgba(0, 0, 0, 0.17);
                        }
                        
                        #banner-306842837 .bg {
                            background-position: 50% 58%;
                        }
                        
                        @media (min-width:550px) {
                            #banner-306842837 {
                                padding-top: 920px;
                            }
                        }
                        
                        @media (min-width:850px) {
                            #banner-306842837 {
                                padding-top: 600px;
                            }
                        }
                    </style>
                </div>
                <!-- .banner -->

                <div class="banner has-hover" id="banner-788653479">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                            <div class="overlay"></div>
                        </div>
                        <!-- bg-layers -->
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-471422974" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">

                                    <div class="text-inner text-center">

                                        <h2 class="uppercase thin-font" style="text-align: center;">sáng tạo không ngừng làm nên sựmới mẻ và phát triển từng ngày</h2>
                                    </div>
                                </div>
                                <!-- text-box-inner -->

                                <style scope="scope">
                                    #text-box-471422974 {
                                        width: 99%;
                                    }
                                    
                                    #text-box-471422974 .text {
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
                        #banner-788653479 {
                            padding-top: 500px;
                        }
                        
                        #banner-788653479 .bg.bg-loaded {
                            background-image: url(http://127.0.0.1/giangiao/wp-content/uploads/2017/10/slide-gian-giao-phu-hung-4.jpg);
                        }
                        
                        #banner-788653479 .overlay {
                            background-color: rgba(0, 0, 0, 0.17);
                        }
                        
                        #banner-788653479 .bg {
                            background-position: 50% 58%;
                        }
                        
                        @media (min-width:550px) {
                            #banner-788653479 {
                                padding-top: 920px;
                            }
                        }
                        
                        @media (min-width:850px) {
                            #banner-788653479 {
                                padding-top: 600px;
                            }
                        }
                    </style>
                </div>
                <!-- .banner -->

                <div class="banner has-hover" id="banner-1536577444">
                    <div class="banner-inner fill">
                        <div class="banner-bg fill">
                            <div class="bg fill bg-fill "></div>
                            <div class="overlay"></div>
                        </div>
                        <!-- bg-layers -->
                        <div class="banner-layers container">
                            <div class="fill banner-link"></div>
                            <div id="text-box-668269488" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                <div class="text dark">

                                    <div class="text-inner text-center">

                                        <h2 class="uppercase thin-font" style="text-align: center;">Bạn đang chọn đúng người để được phục vụ</h2>
                                    </div>
                                </div>
                                <!-- text-box-inner -->

                                <style scope="scope">
                                    #text-box-668269488 {
                                        width: 99%;
                                    }
                                    
                                    #text-box-668269488 .text {
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
                        #banner-1536577444 {
                            padding-top: 500px;
                        }
                        
                        #banner-1536577444 .bg.bg-loaded {
                            background-image: url(http://127.0.0.1/giangiao/wp-content/uploads/2017/06/slide-gian-giao-phu-hung-2.jpg);
                        }
                        
                        #banner-1536577444 .overlay {
                            background-color: rgba(0, 0, 0, 0.17);
                        }
                        
                        #banner-1536577444 .bg {
                            background-position: 50% 58%;
                        }
                        
                        @media (min-width:550px) {
                            #banner-1536577444 {
                                padding-top: 920px;
                            }
                        }
                        
                        @media (min-width:850px) {
                            #banner-1536577444 {
                                padding-top: 600px;
                            }
                        }
                    </style>
                </div>
                <!-- .banner -->
            </div>

            <div class="loading-spin dark large centered"></div>
                <style scope="scope"></style>
        </div>
        <?php
    }
}
