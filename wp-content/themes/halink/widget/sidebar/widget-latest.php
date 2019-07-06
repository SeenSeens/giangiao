<?php
class WP_Widget_Latest_Posts extends WP_Widget {
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'widget_Latest_entries',
			'description'                 => __( 'Bài viết mới nhất' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'Latest-posts', __( 'Latest Posts' ), $widget_ops );
		$this->alt_option_name = 'widget_Latest_entries';
	}
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Latest Posts' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
		}
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
		$r = new WP_Query(
			apply_filters(
				'widget_posts_args',
				array(
					'posts_per_page'      => $number,
					'no_found_rows'       => true,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				),
				$instance
			)
		);
		if ( ! $r->have_posts() ) {
			return;
		}
		?>
		 <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
		<?php if ( $title ) { ?>
            <span class="widget-title"> <span> <?= $title; ?> </span> </span>
            <div class="is-divider small"></div>
        <?php } ?>
		<ul>
			<?php foreach ( $r->posts as $Latest_post ) : ?>
				<?php
				$post_title = get_the_title( $Latest_post->ID );
                $title      = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($Latest_post->ID), 'post-thumbnail' );
				?>
				<li class="recent-blog-posts-li">
                    <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                        <div class="flex-col mr-half">
                            <div class="badge post-date badge-circle-inside">
                                <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url(<?php echo $thumb['0']; ?>); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;">
                                    <span class=" post-date-day"><?= get_the_date('d'); ?><br>
                                    <span class="post-date-month is-xsmall"><?= get_the_date('M') ?></span>
                                </div>
                            </div>
                        </div>
                        <a href="<?php the_permalink( $Latest_post->ID ); ?>"><?= $title; ?></a>
                        <?php if ( $show_date ) : ?>
                            <span class="post-date"><?= get_the_date( '', $Latest_post->ID ); ?></span>
                        <?php endif; ?>
                    </div>
				</li>
			<?php endforeach; ?>
        </ul>
        </aside>
		<?php
		//echo $args['after_widget'];
	}
	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		return $instance;
	}
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
		<?php
	}
}
