<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="entry">
    <?php if ( has_post_thumbnail() ):   ?>
    <div class="entry__image narrow">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="entry__textfield">
        <h1><?php the_title(); ?></h1>
        <div class="entry__body">
            <?php the_content(''); ?>
        </div>
    </div>
    <?php endwhile; ?>
</article>
<?php endif; ?>

<?php get_footer(); ?>
