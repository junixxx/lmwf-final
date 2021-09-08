<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="blog-container single-blog">
    <div class="blog-title">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="blog-content">
        <?php echo the_content(); ?>
    </div>

</section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>