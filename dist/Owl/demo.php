<?php /* Template Name: Demo Page */ ?>
<?php get_header(); ?>

<article>
    <div class = 'auto-grid' style = "
        --auto-grid-max-columns: 4;
        --auto-grid-min-size: 18rem;
        --auto-grid-gap: 1rem;">
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
        <div class = 'auto-grid__item'></div>
    </div>

    <img src = '@images/owl.jpg' alt = 'Owl photo' />

</article>

<?php get_footer(); ?>
