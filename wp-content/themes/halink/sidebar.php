<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="post-sidebar large-3 col">
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
</div><!-- .post-sidebar -->
