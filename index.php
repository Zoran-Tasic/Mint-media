<?php get_header(); ?>

    <!-- header -->
    <div class="jumbotron blog text-center d-flex align-items-center justify-content-center">
        <h1 class="display-4 text-white">Blog</h1>
    </div>

    <!-- main -->
    <section class="main container py-5">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : 
                while (have_posts()) :the_post(); ?>
                    <article class="blog-post pb-5">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mint drustvene mreze.jpg" alt="">
                            <div class="text">
                                <h3>Drustvene mreze</h3>
                                <p class="meta">07.09.2020. | Admin</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem iure facilis aliquam magnam voluptatibus doloribus quam earum vitae expedita alias soluta inventore iusto labore, aspernatur quos aperiam similique velit
                                    repellat voluptatem magni corrupti praesentium incidunt aut nisi! Corrupti libero, error hic ea provident veritatis nobis voluptates esse aliquam atque repellat natus est voluptatibus tenetur officia.</p>
                                <a href="" class="btn">Procitaj vise</a>
                            </div>
                        </article>
               <?php endwhile; else :  ?>
                <?php _e('Nema napisnih postova'); ?>
            <?php endif;?>
            </div>
            <div class="col-md-4">
               <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>