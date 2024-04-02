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
        <div class="entry__date"><?php the_time('F j, Y');?></div>
        <div class="entry__body">
            <?php the_content(''); ?>
        </div>
        <div class="entry__meta meta">
            <div class="meta__cats">
                <?php echo 'Categories: '; the_category( ', ' );  ?>
            </div>
            <div class="meta__tags">
                <?php the_tags( 'Tags: ', ', ', ' ' ); ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</article>
<?php endif; ?>

<div class="pagination">
    <?php previous_post_link( '%link',  '%title');?>
    <?php next_post_link( '%link', '%title'); ?>
</div>

<?php get_footer(); ?>
