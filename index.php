<?php get_header(); ?>

    <!-- header -->
    <div class="jumbotron blog text-center d-flex align-items-center justify-content-center">
        <h1 class="display-4 text-white">Blog</h1>
    </div>

    <!-- main -->
    <section class="main container py-5">
        <div class="row">
            <div class="col-md-8">
               
                <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                    <article class="blog-post pb-5">
                        <div class="featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="text">
                            <h3><?php the_title(); ?></h3>
                            <p class="meta">
                                <?php echo get_the_date('F j, Y'); ?> | <?php the_author(); ?>
                            </p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn">
                               <?php _e('Procitaj ceo tekst'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; else : ?>
                    <?php _e('Nema napisanih postova'); ?>
                <?php endif; ?>
                
                
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>