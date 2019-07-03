<div class="row row-large row-divided">	
	<div class="large-9 col">
        <div id="row-983972241" class="row large-columns-3 medium-columns- small-columns-1 row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
            <?php while(have_posts()) { the_post(); ?>
                <div class="col post-item" >
                    <div class="col-inner">
                        <a href="<?php the_permalink(); ?>" class="plain">
                            <div class="box box-text-bottom box-blog-post has-hover">
                                <div class="box-image" >
                                    <div class="image-cover" style="padding-top:56%;">
                                    <?php the_post_thumbnail('post-thumbnail', [
                                        'class' => 'attachment-medium size-medium wp-post-image',
                                        'style' => 'width:300px; height:180px',
                                    ]); ?>
                                    </div>
                                </div><!-- .box-image -->
                                <div class="box-text text-left" >
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large "><?php the_title(); ?></h5>
                                        <div class="is-divider"></div>
                                        <p class="from_the_blog_excerpt "><?php the_excerpt('...', 5); ?></p>				
                                    </div><!-- .box-text-inner -->
                                </div><!-- .box-text -->
                                <div class="badge absolute top post-date badge-circle-inside">
                                    <div class="badge-inner">
                                        <span class="post-date-day"><?= get_the_modified_date('d');?></span><br>
                                        <span class="post-date-month is-xsmall"><?= get_the_modified_date('M'); ?></span>
                                    </div>
                                </div>
                            </div><!-- .box -->
                        </a><!-- .link -->
                    </div><!-- .col-inner -->
                </div><!-- .col -->
            <?php } ?>
        </div>

        <ul class="page-numbers nav-pagination links text-center">
            <?php
            global $wp_query;
            $big = 999999999; // need an unlikely integer
            $translated = __( 'Page', 'halink' ); // Supply translatable string
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text' => '',
                'next_text' => '>',
                'show_all' => false,
                'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
            ) );
            ?>
        </ul>
    </div> <!-- .large-9 -->
    <?php get_sidebar(); ?>
</div>