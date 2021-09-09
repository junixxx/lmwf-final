<section class="container section-homeblogarea">
    <div class="section-text">
        <h2>Blog Articles</h2>
    </div>
    <div class="section-content">
        <?php
        $postQuery = new WP_Query(array('order'   => 'ASC', 'posts_per_page' => 99));
        if ($postQuery->have_posts()) : while ($postQuery->have_posts()) : $postQuery->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="box">
            <div>
                <div class="box-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="box-text">
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="box-author">
                        <div class="author">
                            <?php echo get_avatar(get_the_author_ID(get_the_ID()), 24); ?>
                            <p><span>By: </span><?php the_author(); ?> &nbsp &nbsp &nbsp <span> Posted on:
                                </span> &nbsp<?php the_date(); ?></p>
                        </div>
                        <div class="box-tag">
                            <?php
                                            foreach ((get_the_category()) as $category) {
                                                echo "<span class='tag'>" . $category->name . "</span>";
                                                echo category_description($category);
                                            }
                                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <?php endwhile;
        else : endif; ?>
    </div>
    <div class="loadButton">
    </div>
</section>