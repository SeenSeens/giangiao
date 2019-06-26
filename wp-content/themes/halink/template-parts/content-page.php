<div id="post-<?php the_ID(); ?> content" <?php post_class('large-12 col'); ?> role="main">
	<header class="entry-header text-center">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="is-divider medium"></div>
	</header><!-- .entry-header -->
	<?php halink_post_thumbnail(); ?>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'halink' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'halink' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
