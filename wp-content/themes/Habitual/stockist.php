<?php
/**
 * The Stockist Page template file
 *
 * This is the Stockist template file in a Habitual theme
 * and Used for the Stockist Page of the site
 *
 * Template Name: Stockist
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
            <div class="stockist">
                <div class="row">
                    <div class="large-12 small-12 columns">
                        <h1 class="heading">
                            STOCKIST
                        </h1>
                    </div>
                    <div class="large-7 small-12 columns">
                        &nbsp;
                    </div>
                </div>

                <div class="row">
                    <div class="large-4  small-12 columns">
                        <div class="stockist-list">
                            <div class="stocklist-category">
                                Specialty Stores
                                <ul class="specialty" style="display: block">
                                    <li>Alabama</li>
                                    <li>Alaska  </li>
                                    <li>Arizona </li>
                                    <li>Arkansas</li>
                                </ul>
                            </div>
                            <div class="departments-category">
                                Department Stores
                                <ul class="departments">
                                    <li>Alabama</li>
                                    <li>Alaska  </li>
                                    <li>Arizona </li>
                                    <li>Arkansas</li>
                                </ul>
                            </div>
                            <div class="retailers-category">
                                Online Retailers
                                <ul class="departments">
                                    <li>Alabama</li>
                                    <li>Alaska  </li>
                                    <li>Arizona </li>
                                    <li>Arkansas</li>
                                </ul>
                            </div>
                            <div class="international-category">
                                International
                                <ul class="departments">
                                    <li>Alabama</li>
                                    <li>Alaska  </li>
                                    <li>Arizona </li>
                                    <li>Arkansas</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="large-8 small-12 columns">
                        <div class="row" style="margin-left: 10px;margin-bottom:10px;">
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">   
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-bottom:10px;">
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">   
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-bottom:10px;">
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">   
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-bottom:10px;">
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">   
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-bottom:10px;">
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 small-12 columns">   
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="box-heading">
                                            Corporate Office
                                        </div>
                                        <div class="box-content">
                                            13344 S. Main St. Suite B<br />
                                            Los Angeles, CA 90061
                                        </div>
                                    </div>
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