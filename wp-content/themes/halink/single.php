<?php
get_header('page');
?>
	<main id="main" class="">
		<div id="content" class="blog-wrapper blog-single page-wrapper">
			<div class="row row-large row-divided">
				<div class="large-9 col">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
