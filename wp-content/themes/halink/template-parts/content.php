<div class="large-9 col">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="article-inner">
			<header class="entry-header">
				<div class="entry-header-text entry-header-text-top text-left">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						halink_posted_on();
						halink_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				</div>
			</header><!-- .entry-header -->
		</div>
		<?php halink_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'halink' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'halink' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php halink_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>