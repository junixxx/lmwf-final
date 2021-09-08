<?php get_header(); ?>
<section class="container section-archive">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div>
        <div>
            <h2><?php the_title(); ?></h2>
            Created By: <h4><?php the_author() ?></h4>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <div>
            <a href="<?php the_permalink(); ?>">Read Blog</a>
        </div>
    </div>
    <?php endwhile;
    else : endif; ?>
</section>
<?php get_footer(); ?>