<?php get_header('page'); ?>
	<main id="main" class="site-main">
		<div id="content" class="blog-wrapper blog-archive page-wrapper">
			<?php if ( have_posts() ) : ?>
				<a class="nav-top-link">
					<header class="archive-page-header">
						<div class="row">
							<div class="large-12 text-center col">
								<?php
								the_archive_title( '<h1 class="page-title is-large uppercase">', '</h1>' );
								the_archive_description( '<div class="page-title is-large uppercase">', '</div>' );
								?>
							</div>
						</div>
					</header><!-- .archive-page-header -->
				</a>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
