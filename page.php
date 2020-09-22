<?php 
    /*
    Template Name: Main page template
    */
?>

<?php get_header(); ?>

    <!-- header -->
    <div class="jumbotron blog text-center d-flex align-items-center justify-content-center">
        <h1 class="display-4 text-white"><?php the_title(); ?></h1>
    </div>

    <!-- main -->
    <section class="forma container py-5 text-white">
                <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
                    <?php the_content(); ?>                   
                <?php endwhile; else : ?>
                    <?php _e('Nema napisanih stranica'); ?>
                <?php endif; ?>
           
    </section>
    
<?php get_footer(); ?>