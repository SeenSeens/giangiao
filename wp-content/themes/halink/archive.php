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
				if(get_field('chuyen_muc','category_'.get_queried_object_id()) == '1') {
					require_once get_parent_theme_file_path( 'template-parts/category/sidebar-right.php' );
				}
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>
	</main><!-- #main -->
<?php
get_footer();
