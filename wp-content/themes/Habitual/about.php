<?php
/**
 * The About Page template file
 *
 * This is the about template file in a Habitual theme
 * and Used for the About Page of the site
 *
 * Template Name: About
 * @package WordPress
 * @subpackage Habitual
 * @since Habitual
 * @Developer Zohaib
 * @Date 2014-02-11
 */
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
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            }
                            ?>
                            <!--img src="<?php echo get_template_directory_uri(); ?>/img/about-left.png" /-->
                        </div>
                    </div>
                    <div class="large-9 small-9 columns">
                        <div class="about-content">
                            <h1 class="about-heading">
                                <?php the_title() ?>
                            </h1>
                            <div class="about-text">
                                <?php the_content() ?>
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