<?php get_header(); ?>


<div class="narrow">
    <h1><?php printf( __( 'Search Results for &#8220;%s&#8221;' ), '' . get_search_query() . '' ); ?></h1>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="entry">
    <?php if ( has_post_thumbnail() ):   ?>
    <div class="entry__image narrow">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="entry__textfield">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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

<div class="pagination"><?php
global $wp_query;
$big = 999999999;
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'type' => 'plain',
    'prev_text'    => __('Forward'), 
    'next_text'    => __('Back'),
    'total' => $wp_query->max_num_pages
) );
?></div>

<?php get_footer(); ?>
