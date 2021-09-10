<section class="container section-heroslider">
    <div class="slider">

        <?php
        $postQuery = new WP_Query(array('category_name' => 'Hero Blog', 'order'   => 'ASC'));
        if ($postQuery->have_posts()) : while ($postQuery->have_posts()) : $postQuery->the_post(); ?>
        <div class="slide">
            <div class="slide-content">
                <div class="slide-text">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <h3>
                        <?php the_excerpt(); ?>
                    </h3>
                    <br>
                    <a href="<?php the_permalink(); ?>">Read Article</a>
                </div>
                <div class="slide-image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" loading="lazy">
                </div>
            </div>
        </div>
        <?php endwhile;
        else : endif; ?>

    </div>
    <div class="slide-button">
        <i class="fas fa-chevron-circle-left fa-2x" id="arrowLeft"></i>
        <i class="fas fa-chevron-circle-right fa-2x" id="arrowRight"></i>
    </div>
</section>