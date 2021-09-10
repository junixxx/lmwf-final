<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="single-blog">
    <div class="wrapper">
        <div class="heading">
            <div>
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="author-box">
                <div class="author">
                    <?php echo get_avatar(get_the_author_ID(get_the_ID()), 24); ?>
                    <p><span>By: </span><?php the_author(); ?> &nbsp &nbsp &nbsp <span>
                </div>
                <div class="date">
                    <i class="fas fa-calendar-alt"></i>
                    <p><?php echo the_date(); ?></p>
                </div>
            </div>
            <div class="tag">
                <?php
                                foreach ((get_the_category()) as $category) {
                                    echo "<span class='tag-content'>" . $category->name . "</span>";
                                    echo category_description($category);
                                }
                                ?>
            </div>
        </div>
        <div class="blog-container">
            <div class="content">
                <?php echo the_content(); ?>
            </div>
            <div class="author-area">
                <div class="text">
                    Want to work with Joebil? Feel free to send him an email here joebil@letsmakeworkfun.com or you can
                    connect with him on his various social media platforms
                </div>
                <div class="image">
                    <img src="<?php echo get_theme_file_uri('images/joebil-lotayco.png');  ?>" alt="Joebil Lotayco">
                    <h3>Joebil Lotayco</h3>
                    <p>Crazy Creator of LMWF</p>
                    <a href="https://m.me/joebillotayco2"><i class="fab fa-facebook-messenger fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/joebillotayco"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>