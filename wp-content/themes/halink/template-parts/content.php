<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner">
		<header class="entry-header">
			<div class="entry-header-text entry-header-text-top text-left">
				<h6 class="entry-category is-xsmall">
					<a href="../index.html" rel="category tag">Dự án</a>
				</h6>
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<div class="entry-divider is-divider small"></div>
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta uppercase is-xsmall">
						<?php
						halink_posted_on();
						halink_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div><!-- .entry-header-text entry-header-text-top text-left -->
			<div class="entry-image relative">
			<?php halink_post_thumbnail(); ?>
				<div class="badge absolute top post-date badge-circle-inside">
					<div class="badge-inner">
						<span class="post-date-day"><?= get_the_modified_date('d'); ?></span><br>
						<span class="post-date-month is-small"><?= get_the_modified_date('M'); ?></span>
					</div>
				</div>
			</div>
		</header>

		<div class="entry-content single-page">
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
		</div><!-- .entry-content single-page -->
		<?php //halink_post_navigation(); ?>
	</div>
</article>
