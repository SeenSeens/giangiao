<?php
get_header('page');
?>
	<main id="main" class="content-area">
		<div class="row page-wrapper">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile;
		?>
		</div><!-- #main -->
	</main><!-- #primary -->
<?php
get_footer();
