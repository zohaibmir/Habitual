<?php
/**
 * The Blog Page template file
 *
 * This is the Blog template file in a Habitual theme
 * and Used for the Blog Page of the site
 *
 * Template Name: Blog
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
    <div class="row">
        <div class="large-12 small-12 columns">
            <div class="blog-socialmedia">
                <div class="social-content">
                    <div class="row">
                        <div class="large-6 small-6 columns">
                            <h1 class="heading">
                                THE HABIT BLOG
                            </h1>
                        </div>
                        <div class="large-6 small-6 columns text-right">
                            <div class="blog-socilicons">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/social.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-content">
        <div class="row">
            <div class="large-3 small-12 columns">
                <div class="blog-left-section">
                    <div class="row collapse">
                        <div class="small-11 columns">
                            <input type="text" id="search" class="search-field" placeholder="" />
                        </div>
                        <div class="small-1 columns">
                            <span class="postfix"><img src="<?php echo get_template_directory_uri(); ?>/img/search-icon.png" /></span>
                        </div>
                    </div>
                    <div class="row collapse">
                        <div class="large-12 small-12 columns">
                            <div class="categories-list">
                                CATEGORIES
                                <ul>
                                    <li>
                                        <a href="#">
                                            5 Questions <span>(14) </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Bands We Love <span>(27)</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">
                                            Behind the Scenes <span>(7)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Explained  <span>(11)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">                                                    
                                            First Look!  <span>(19)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            HABITUAL Obsessions  <span>(64)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Inspiration <span>(81)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Made in the USA  <span>(44)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            News  <span>(55)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            On the Road  <span>(27)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">

                                            On Trend  <span>(60)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">

                                            Required Reading  <span>(13)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="recent-posts">
                                RECENT POSTS
                                <ul>
                                    <li>
                                        <a href="#">
                                            Made in the USA: Faribault Mills
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">                                                  
                                            Inspiration: James Turrell
                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">                                                     
                                            Quote of the day
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Habit-Forming:Chanel Sneakers
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">                                                                                                         
                                            From the Hip: Beautiful Brains

                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="archives-list">
                                ARCHIVES
                                <ul>
                                    <li>
                                        <a href="#">
                                            January 2014  <span>(13) </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            December 2013 <span>(27)</span>
                                        </a>
                                    </li>



                                    <li>
                                        <a href="#">
                                            November 2013 <span>(7)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            October 2013  <span>(11)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">                                                    
                                            September 2012  <span>(19)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            August 2013  <span>(64)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            July 2013 <span>(81)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            June 2013  <span>(44)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            May 2013 <span>(55)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            April 2013  <span>(27)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">

                                            March 2013  <span>(60)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">

                                            February 2013  <span>(13)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="large-9 small-12 columns">
                <div class="blog-right-section">
                    <div class="row">
                        <div class="large-12 small-12 columns">
                            <h1 class="heading">
                                Made in the USA: Faribault Mills
                            </h1>
                            <p class="posting-date">
                                Posted by The Habit on Friday, January 31st, 2014
                            </p>
                            <p class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail1.png" />
                            </p>
                            <p>
                                Made in Faribault, Minnesota—where they know a thing or two about cold—these 100% merino wool blankets look as cozy as they do cute. The Dot Throws are a result of Faribault Mill’s longstanding collaborations with U.S. businesses, in this case updating a 1950s design for an airline in olive, silver and charcoal for today’s palettes. We’ll take one of each please!
                            </p>
                            <p>Post a comment!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 small-12 columns">
                            <h1 class="heading">
                                Made in the USA: Faribault Mills
                            </h1>
                            <p class="posting-date">
                                Posted by The Habit on Friday, January 31st, 2014
                            </p>
                            <p class="thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/blog-thumbnail1.png" />
                            </p>
                            <p>
                                Made in Faribault, Minnesota—where they know a thing or two about cold—these 100% merino wool blankets look as cozy as they do cute. The Dot Throws are a result of Faribault Mill’s longstanding collaborations with U.S. businesses, in this case updating a 1950s design for an airline in olive, silver and charcoal for today’s palettes. We’ll take one of each please!
                            </p>
                            <p>Post a comment!</p>
                        </div>
                    </div>
                    <div class="pagination-content">
                        <center>
                            <ul class="pagination">
                                <li class="arrow unavailable"><a href="">Previous</a></li>
                                <li class="current"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li class="unavailable"><a href="">&hellip;</a></li>
                                <li><a href="">12</a></li>
                                <li><a href="">13</a></li>
                                <li class="arrow"><a href="">Next</a></li>
                            </ul>
                        </center>
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
       