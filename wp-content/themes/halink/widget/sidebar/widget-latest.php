<?php
class WG_Latest extends WP_Widget
{
    function __construct()
    { 
        $widget_ops = array(
			'classname'                   => 'widget_latest',
			'description'                 => __( 'Bài viết mới nhất nè!' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'latest', __( 'Bài viết mới nhất nè!' ), $widget_ops );
        $this->alt_option_name = 'WG_Latest';
    }
    function form($instance)
    { 
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        ?>
        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>
        <?php
    }
    function update($new_instance, $old_instance)
    {
        $instance              = $old_instance;
        $instance['number']    = (int) $new_instance['number'];
        return $instance;
    }
    function widget($args, $instance)
    {   
        if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Bài viết mới nhất' );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
        }
        $r = new WP_Query(
			apply_filters(
				'widget_posts_args',
				array(
					'posts_per_page'      => $number,
					//'no_found_rows'       => true,
					'post_status'         => 'publish',
                    //'ignore_sticky_posts' => true,
                    'orderby'             => 'id'
				),
				$instance
			)
        );
        if ( ! $r->have_posts() ) {
			return;
		}
        ?>
        <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
                <span class="widget-title">
                    <span><?= $title; ?></span>
                </span>
                <div class="is-divider small"></div>
                <ul>
                <?php foreach ( $r->posts as $new_post ) : ?>
                <?php 
                    $post_title = get_the_title( $new_post->ID );
                    $title      = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
                    //$post_thumbnail = get_the_post_thumbnail( $new_post->ID);
                    //$images		= ( ! empty( $post_thumbnail ) ) ? $post_thumbnail : __('(no images)' );
                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($new_post->ID), 'post-thumbnail' );
                ?>	
		            <li class="recent-blog-posts-li">
			            <div class="flex-row recent-blog-posts align-top pt-half pb-half">
				            <div class="flex-col mr-half">
					            <div class="badge post-date  badge-circle-inside">
							        <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url(<?php echo $thumb['0']; ?>); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;">
								        <span class="post-date-day"><?= get_the_date('d'); ?></span><br>
								        <span class="post-date-month is-xsmall"><?= get_the_date('M') ?></span>
							        </div>
					            </div>
				            </div><!-- .flex-col -->
				            <div class="flex-col flex-grow">
					            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				   	            <span class="post_comments oppercase op-7 block is-xsmall"><a href="<?php the_permalink(); ?>"></a></span>
				            </div>
			            </div><!-- .flex-row -->
                    </li>
                <?php endforeach; ?>
                </ul>
            </aside>
        <?php
    }
}
