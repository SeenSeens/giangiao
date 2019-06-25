<?php get_header(); ?>
<main id="main" class="">
    <div id="content" role="main">
    <?php if (is_active_sidebar('index')) :  ?>
        <?php dynamic_sidebar('index'); ?>
    <?php endif; ?>	
    </div>
</main>
<?php get_footer(); ?>