<a href="<?php the_permalink(); ?>" class="page-works-index_article_main_link" target=”_blank” rel="noopener">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-works-index_article_main' ); ?>>
        <div class="works_container">
            <div class="works_category">
                <!--<?php the_terms( get_the_ID(),'work','',' ' ); ?>-->
                <?php
                $terms = get_the_terms(get_the_ID(), 'work');
                if(!empty($terms)):
                    foreach($terms as $term):
                    echo '<span>'.$term->name.'</span>';
                    endforeach;
                else:
                    echo '<span>'.'未分類'.'</span>';
                endif;
                ?>
            </div>
            <h5><?php the_title(); ?></h5>
            <?php the_excerpt(); ?>
            <div class="banner_wrapper">
                <?php
                if( has_post_thumbnail() ):
                    the_post_thumbnail( 'page_eyecatch' );
                else:
                ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy.webp" alt="" width="300" height="200" load="lazy">
                <?php endif; ?>
            </div>
        </div>
    </article>
</a>