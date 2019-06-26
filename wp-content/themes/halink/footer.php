    <footer id="footer" class="footer-wrapper">
        <!-- FOOTER 1 -->
        <div class="footer-widgets footer footer-1">
            <div class="row large-columns-1 mb-0">
                <div id="block_widget-2" class="col pb-0 widget block_widget">
                    <div class="gap-element" style="display:block; height:auto; padding-top:10px" class="clearfix"></div>
                    <div class="row row-small row-full-width align-middle align-right" id="row-2086901788">
                        <div class="col float-col-1 medium-3 small-6 large-3">
                            <div class="col-inner text-center dark">
                                <h3><i class="fa fa-mobile" aria-hidden="true"></i> <span style="color: #ff0000;"><a href="tel:0929012012">0929 012 012</a></span></h3>
                            </div>
                        </div>
                        <div class="col medium-3 small-6 large-3">
                            <div class="col-inner text-center dark">
                                <h3><i class="fa fa-map-marker"></i><span style="color: #339966;"><a href="lien-he/index.html"> LIÊN HỆ</a></span></h3>
                            </div>
                        </div>
                        <style scope="scope">
                        </style>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- footer 1 -->
        <!-- FOOTER 2 -->
        <div class="footer-widgets footer footer-2 dark">
            <div class="row dark large-columns-1 mb-0">
                <div id="block_widget-3" class="col pb-0 widget block_widget">
                    <section class="section dark" id="section_1660399525" style="padding-left: 0; padding-right: 0;">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div>
                        <!-- .section-bg -->
                        <div class="section-content relative">
                            <div class="row row-small" id="row-144412680">
                                <?php
                                if(is_active_sidebar('footer')) {
                                    dynamic_sidebar('footer');
                                }
                                ?>                                                                                        
                                <style scope="scope">
                                    #row-144412680>.col>.col-inner {
                                        padding: 0 0px 0px 0px;
                                    }
                                </style>
                            </div>
                        </div>
                        <!-- .section-content -->
                        <style scope="scope">
                            #section_1660399525 {
                                padding-top: 30px;
                                padding-bottom: 30px;
                                background-color: rgb(88, 146, 91);
                            }
                        </style>
                    </section>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end footer 2 -->
        <div class="absolute-footer dark medium-text-center text-center">
            <div class="container clearfix">
                <div class="footer-primary pull-left">
                    <div class="copyright-footer">
                        Copyright <?= date('Y'); ?> © <a href="index.html">giangiaophuhung.com</a>, All rights reserved. </div>
                </div>
                <!-- .left -->
            </div>
            <!-- .container -->
        </div>
        <!-- .absolute-footer -->
        <a href="#top" class="back-to-top button invert plain is-outline hide-for-medium icon circle fixed bottom z-1" id="top-link"><i class="icon-angle-up"></i></a>
    </footer>
</div> <!-- #wrapper -->
<?php wp_footer(); ?>
</body>

</html>