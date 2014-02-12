<?php
/**
 * The Contact Us Page template file
 *
 * This is the Contact Us template file in a Habitual theme
 * and Used for the Contact Page of the site
 *
 * Template Name: ContactUs
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
            $num_of_text_section = get_count_group('page_group_short_text_title');
            ?>
            <div class="contact">
                <div class="row">
                    <div class="large-12 small-12 columns">
                        <h1 class="heading">
                            <?php the_title() ?>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 small-12 columns">                   
                        <div class="contact-info-box">
                            <div class="info-box">
                                <div class="box-heading">
                                    <?php echo get('page_group_short_text_title', 1) ?>
                                </div>
                                <div class="box-content">
                                    <?php echo get('page_group_short_text_description', 1) ?>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="info-box">
                                <div class="box-heading">
                                    <?php echo get('page_group_short_text_title', 2) ?>
                                </div>
                                <div class="box-content">
                                    <?php echo get('page_group_short_text_description', 2) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-4 small-12 columns">
                        <div class="contact-us">
                            <?php the_content() ?>
                        </div>

                    </div>
                    <div class="large-4 small-12 columns">

                        <div class="contact-info-box right">
                            <div class="info-box">
                                <div class="box-heading">
                                    <?php echo get('page_group_short_text_title', 3) ?>
                                </div>
                                <div class="box-content">
                                    <?php echo get('page_group_short_text_description', 3) ?>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info-box right">
                            <div class="info-box">
                                <div class="box-heading">
                                    <?php echo get('page_group_short_text_title', 4) ?>
                                </div>
                                <div class="box-content">
                                    <?php echo get('page_group_short_text_description', 4) ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    </section>
    <?php
endif;
?>
<?php get_footer(); ?>