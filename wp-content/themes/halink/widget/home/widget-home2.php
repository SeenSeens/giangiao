<?php
class WG_Home2 extends WP_Widget {
    function __construct()
    {
        $widget_ops = array(
            'classname'                   => 'widget_home_2',
            'description'                 => __('Trang chủ dòng 2'),
            'customize_selective_refresh' => true,
        );
        parent::__construct('home_2', __('Trang chủ dòng 2'), $widget_ops);
        $this->alt_option_name = 'WG_Home2';
    }
    function form($instance)
    {
        $instance = wp_parse_args($instance);
        $title     = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $describe     = isset($instance['describe']) ? esc_attr($instance['describe']) : '';
        $categories     = isset($instance['categories']) ? esc_attr($instance['categories']) : '';
        $number    = isset($instance['number']) ? absint($instance['number']) : 5;
        ?>
        <p>
            <label for="<?= $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?= $this->get_field_id('title'); ?>" name="<?= $this->get_field_name('title'); ?>" type="text" value="<?= $title; ?>" />
        </p>
        <p>
            <label for="<?= $this->get_field_id('describe'); ?>"><?php esc_html_e( 'Mô tả ngắn', 'halink' ); ?></label>
            <textarea class="widefat" name="<?= $this->get_field_name('describe'); ?>" id="<?= $this->get_field_id('describe'); ?>" cols="30" rows="10"><?= $describe; ?></textarea>
        </p>
        <p>
            <label for="<?= $this->get_field_id('categories'); ?>"><?php _e('Categories:'); ?></label>
            <select name="<?= $this->get_field_id('categories'); ?>" id="<?= $this->get_field_id('categories'); ?>" style='width:50%;margin-left:5px'>
                <option value="">Bất kỳ</option>
                <?php
                $taxonomy     = 'category';
                $orderby      = 'name';
                $show_count   = 0;
                $pad_counts   = 0;
                $hierarchical = 1;
                $title        = '';
                $empty        = 0;
                $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
                );
                $all_categories = get_categories($args);
                foreach ($all_categories as $cat) {
                    $sl = "";
                    if ($cat->term_id == $categories) {
                        $sl = "selected";
                    }
                    echo "<option value=\"" . $cat->term_id . "\" $sl>" . $cat->name . "</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label for="<?= $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
            <input class="tiny-text" id="<?= $this->get_field_id('number'); ?>" name="<?= $this->get_field_name('number'); ?>" type="number" step="1" min="1" value="<?= $number; ?>" size="3" />
        </p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['title']     = sanitize_text_field($new_instance['title']);
        $instance['describe']     = sanitize_text_field($new_instance['describe']);
        $instance['categories'] = $_POST[$this->get_field_id('categories')];
        $instance['number']    = (int)$new_instance['number'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $describe = apply_filters('widget_describe', $instance['describe']);
        $categories = apply_filters('widget_categories', $instance['categories']);
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
        }
        $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => $categories,
            'orderby' => 'ID',
            'order' => 'DESC',
            'posts_per_page' => $number
        ));
        ?>
        <div class="vc_row wpb_row vc_row-fluid vc_column-gap-10">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  class="vc_sep_line"></span></span>
                        </div>
                        <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <h2 style="font-size: 33px;color: #327d57;line-height: 1.3;text-align: center;font-family:Roboto Condensed;font-weight:400;font-style:normal" class="vc_custom_heading sanpham vc_custom_1498134269344"><?= $title; ?></h2>
                                        <div class="wpb_text_column wpb_content_element  tat">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">
                                                <span style="font-family: tahoma, arial, helvetica, sans-serif; color: #333333;"><?= $describe; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_column-gap-10">
                        <?php while($query->have_posts()) : $query->the_post(); ?>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1498550005111">
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="<?php the_permalink(); ?>" target="_self" class="vc_single_image-wrapper vc_box_border_grey">
                                                <?php the_post_thumbnail('post-thumbnail', [
                                                    'class' => 'vc_single_image-img',
                                                    'style' => 'width:350px; height:230px;'
                                                ]); ?>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="vc_custom_1498549235462 ubtn-ctn-center "><a class="ubtn-link ult-adjust-bottom-margin ubtn-center ubtn-custom " rel='' href="<?php the_permalink(); ?>"><button type="button" id="ubtn-7017" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-left-bg  none  ubtn-sep-icon ubtn-sep-icon-at-right  ubtn-center   tooltip-5d1233267baa1"  data-hover="#327d57" data-border-color="" data-bg="#327d57" data-hover-bg="#ffffff" data-border-hover="" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow=""  data-ultimate-target='#ubtn-7017'  data-responsive-json-new='{"font-size":"desktop:25px;","line-height":"desktop:30px;"}'  style="font-family:&#039;Roboto Condensed&#039;;font-weight:normal;font-style:normal;width:370px;min-height:55px;padding:10px 10px;border:none;background: #327d57;color: #ffffff; margin-bottom:1em;"><span class="ubtn-data ubtn-icon"><i class="Defaults-angle-right" style="font-size:24px;color:#ffffff;"></i></span><span class="ubtn-hover" style="background-color:#ffffff"></span><span class="ubtn-data ubtn-text " ><?php echo short_title('...', 5);  ?></span></button></a></div>
                                        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_3 vc_sep_pos_align_center vc_separator_no_text"><span class="vc_sep_holder vc_sep_holder_l"><span  style="border-color:#327d57;" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span  style="border-color:#327d57;" class="vc_sep_line"></span></span>
                                        </div>
                                        <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
