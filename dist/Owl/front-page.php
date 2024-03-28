<?php get_header(); ?>
<article>


    <img src="<?php echo get_template_directory_uri();?>/images/owl.jpg" alt="Owl photo" />
    
            <!-- WP Loop -->
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // Начало цикла ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content();?>
        <?php endwhile;?>
    
</article>

<?php get_footer(); ?>
