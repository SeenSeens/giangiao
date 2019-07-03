<?php get_header('header'); ?>
<main id="main">
    <div id="content" role="main">
    <?php if (is_active_sidebar('index')) {
        dynamic_sidebar('index');
    } ?>	
    </div>
    <div class="row" id="row-1294936103">
        <div class="col small-12 large-12">
            <div class="col-inner">
                <div class="col small-12 large-12">
                    <div class="col-inner"></div>
                </div>
                <?php if (is_active_sidebar('index-1')) {
                    dynamic_sidebar('index-1');
                } ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>