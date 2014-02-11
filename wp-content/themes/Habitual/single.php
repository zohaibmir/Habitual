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
                    <div class="large-3 small-3 columns">
                        <div class="about-left-section">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/about-left.png" />
                        </div>
                    </div>
                    <div class="large-9 small-9 columns">
                        <div class="about-content">
                            <h1 class="about-heading">
                                About Habitual
                            </h1>
                            <div class="about-text">
                                <p>
                                    Founded in 2001, HABITUAL emerged as a top leader in the premium denim market. Widely embraced by celebrities, fashion editors and style mavens, it’s impeccable fit and forward designs gained worldwide recognition instantly.
                                </p>
                                <p>
                                    We draw our inspiration from New York and Los Angeles combining a bicoastal sensibility to the brand. Every piece is expertly cut, sewn and washed in Los Angeles, California by skilled artisans.
                                </p>
                                <p>
                                    Always on trend but never trendy, we celebrate personal style and inner confidence. When something is a perfect fit, feels right and looks so good, it becomes habitual. Let HABITUAL become your next unbreakable habit.

                                </p>
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