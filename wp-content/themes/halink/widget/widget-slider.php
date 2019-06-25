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
            <div class="slider-wrapper relative " id="slider-887304446">
                <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal flickity-enabled is-draggable" data-flickity-options="{
                    &quot;cellAlign&quot;: &quot;center&quot;,
                    &quot;imagesLoaded&quot;: true,
                    &quot;lazyLoad&quot;: 1,
                    &quot;freeScroll&quot;: false,
                    &quot;wrapAround&quot;: true,
                    &quot;autoPlay&quot;: false,
                    &quot;pauseAutoPlayOnHover&quot; : true,
                    &quot;prevNextButtons&quot;: true,
                    &quot;contain&quot; : true,
                    &quot;adaptiveHeight&quot; : true,
                    &quot;dragThreshold&quot; : 5,
                    &quot;percentPosition&quot;: true,
                    &quot;pageDots&quot;: true,
                    &quot;rightToLeft&quot;: false,
                    &quot;draggable&quot;: true,
                    &quot;selectedAttraction&quot;: 0.1,
                    &quot;parallax&quot; : 0,
                    &quot;friction&quot;: 0.6        }" tabindex="0">
                    <!-- .banner -->
                    <!-- .banner -->
                    <!-- .banner -->
                    <!-- .banner -->
                    <div class="flickity-viewport" style="height: 600px;">
                        <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                            <div class="banner has-hover is-selected" id="banner-1820758363" style="position: absolute; left: 0%;">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill  bg-loaded"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- bg-layers -->
                                    <div class="banner-layers container">
                                        <div class="fill banner-link"></div>
                                        <div id="text-box-759758996" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                            <div class="text dark">
                                                <div class="text-inner text-center">
                                                    <h2 class="uppercase thin-font" style="text-align: center;">KHÔNG CÓ CÔNG VIỆC NÀO QUÁ LỚN</h2>
                                                    <h2 class="uppercase thin-font" style="text-align: center;">ĐỐI VỚI CHÚNG TÔI</h2>
                                                </div>
                                            </div>
                                            <!-- text-box-inner -->
                                            <style scope="scope">
                                                #text-box-759758996 {
                                                    width: 99%;
                                                }

                                                #text-box-759758996 .text {
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
                                    #banner-1820758363 {
                                        padding-top: 500px;
                                    }

                                    #banner-1820758363 .bg.bg-loaded {
                                        background-image: url(http://giangiaophuhung.com/wp-content/uploads/2017/05/slider-homepage-color.jpg);
                                    }

                                    #banner-1820758363 .overlay {
                                        background-color: rgba(0, 0, 0, 0.17);
                                    }

                                    #banner-1820758363 .bg {
                                        background-position: 50% 58%;
                                    }

                                    @media (min-width:550px) {
                                        #banner-1820758363 {
                                            padding-top: 920px;
                                        }
                                    }

                                    @media (min-width:850px) {
                                        #banner-1820758363 {
                                            padding-top: 600px;
                                        }
                                    }
                                </style>
                            </div>
                            <div class="banner has-hover" id="banner-577277104" style="position: absolute; left: 100%;">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill  bg-loaded"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- bg-layers -->
                                    <div class="banner-layers container">
                                        <div class="fill banner-link"></div>
                                        <div id="text-box-1091420151" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                            <div class="text dark">
                                                <div class="text-inner text-center">
                                                    <h2 class="uppercase thin-font" style="text-align: center;">SẢN PHẨM CHẤT LƯỢNG, AN TOÀN</h2>
                                                    <h2 class="uppercase thin-font" style="text-align: center;">CHO MỌI CÔNG TRÌNH</h2>
                                                </div>
                                            </div>
                                            <!-- text-box-inner -->
                                            <style scope="scope">
                                                #text-box-1091420151 {
                                                    width: 99%;
                                                }

                                                #text-box-1091420151 .text {
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
                                    #banner-577277104 {
                                        padding-top: 500px;
                                    }

                                    #banner-577277104 .bg.bg-loaded {
                                        background-image: url(http://giangiaophuhung.com/wp-content/uploads/2017/06/slider-homepage-color-2.jpg);
                                    }

                                    #banner-577277104 .overlay {
                                        background-color: rgba(0, 0, 0, 0.17);
                                    }

                                    #banner-577277104 .bg {
                                        background-position: 50% 58%;
                                    }

                                    @media (min-width:550px) {
                                        #banner-577277104 {
                                            padding-top: 920px;
                                        }
                                    }

                                    @media (min-width:850px) {
                                        #banner-577277104 {
                                            padding-top: 600px;
                                        }
                                    }
                                </style>
                            </div>
                            <div class="banner has-hover" id="banner-271581476" style="position: absolute; left: 200%;">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill  bg-loaded"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- bg-layers -->
                                    <div class="banner-layers container">
                                        <div class="fill banner-link"></div>
                                        <div id="text-box-681923441" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                            <div class="text dark">
                                                <div class="text-inner text-center">
                                                    <h2 class="uppercase thin-font" style="text-align: center;">sáng tạo không ngừng làm nên sựmới mẻ và phát triển từng ngày</h2>
                                                </div>
                                            </div>
                                            <!-- text-box-inner -->
                                            <style scope="scope">
                                                #text-box-681923441 {
                                                    width: 99%;
                                                }

                                                #text-box-681923441 .text {
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
                                    #banner-271581476 {
                                        padding-top: 500px;
                                    }

                                    #banner-271581476 .bg.bg-loaded {
                                        background-image: url(http://giangiaophuhung.com/wp-content/uploads/2017/10/slide-gian-giao-phu-hung-4.jpg);
                                    }

                                    #banner-271581476 .overlay {
                                        background-color: rgba(0, 0, 0, 0.17);
                                    }

                                    #banner-271581476 .bg {
                                        background-position: 50% 58%;
                                    }

                                    @media (min-width:550px) {
                                        #banner-271581476 {
                                            padding-top: 920px;
                                        }
                                    }

                                    @media (min-width:850px) {
                                        #banner-271581476 {
                                            padding-top: 600px;
                                        }
                                    }
                                </style>
                            </div>
                            <div class="banner has-hover" id="banner-1562938342" style="position: absolute; left: -100%;">
                                <div class="banner-inner fill">
                                    <div class="banner-bg fill">
                                        <div class="bg fill bg-fill  bg-loaded"></div>
                                        <div class="overlay"></div>
                                    </div>
                                    <!-- bg-layers -->
                                    <div class="banner-layers container">
                                        <div class="fill banner-link"></div>
                                        <div id="text-box-946595069" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                            <div class="text dark">
                                                <div class="text-inner text-center">
                                                    <h2 class="uppercase thin-font" style="text-align: center;">Bạn đang chọn đúng người để được phục vụ</h2>
                                                </div>
                                            </div>
                                            <!-- text-box-inner -->
                                            <style scope="scope">
                                                #text-box-946595069 {
                                                    width: 99%;
                                                }

                                                #text-box-946595069 .text {
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
                                    #banner-1562938342 {
                                        padding-top: 500px;
                                    }

                                    #banner-1562938342 .bg.bg-loaded {
                                        background-image: url(http://giangiaophuhung.com/wp-content/uploads/2017/06/slide-gian-giao-phu-hung-2.jpg);
                                    }

                                    #banner-1562938342 .overlay {
                                        background-color: rgba(0, 0, 0, 0.17);
                                    }

                                    #banner-1562938342 .bg {
                                        background-position: 50% 58%;
                                    }

                                    @media (min-width:550px) {
                                        #banner-1562938342 {
                                            padding-top: 920px;
                                        }
                                    }

                                    @media (min-width:850px) {
                                        #banner-1562938342 {
                                            padding-top: 600px;
                                        }
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <button class="flickity-prev-next-button previous" type="button" aria-label="previous">
                        <svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                        </svg>
                    </button>
                    <button class="flickity-prev-next-button next" type="button" aria-label="next">
                        <svg viewBox="0 0 100 100">
                            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                        </svg>
                    </button>
                    <ol class="flickity-page-dots">
                        <li class="dot is-selected"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                        <li class="dot"></li>
                    </ol>
                </div>
                <div class="loading-spin dark large centered" style="display: none;"></div>
                <style scope="scope">
                </style>
            </div>
            <!-- .ux-slider-wrapper -->
        </a>
        <?php
    }
}
