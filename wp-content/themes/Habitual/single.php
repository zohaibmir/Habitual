<?php
get_header();

if (have_posts()) :
    ?>
    <section id="main-content">
        <?php
        while (have_posts()) : the_post();
            //$num_of_slider_images = get_count_group('page_group_slider_image');
            ?>
            <div class="about">
                <div class="row collapse">

                    <div class="large-12 small-12 columns">
                        <div class="about-content" style="padding-top: 30px;">
                            <h1 class="about-heading">
                                <?php the_title() ?>
                            </h1>
                            <p style="padding-top: 30px;"><?php the_post_thumbnail() ?></p>
                            <div class="about-text" style="max-width: 100%;padding: 0;border: none">
                                <?php the_content() ?>
                                <?php comments_template('', true); ?>
                            </div>
                        </div>

                    </div>
                    <!--div class="large-3 small-3 columns">
                        <div class="about-right-section">
                            <img src="img/about-right.png"  />
                        </div>
                    </div-->
                </div>
            </div> 

        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    </section>
    <?php
endif;
?>
<?php get_footer(); ?>