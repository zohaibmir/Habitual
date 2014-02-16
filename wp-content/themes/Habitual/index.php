<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Habitual
 * @since Habitual
 * @Developer Zohaib
 * @Date 2014-02-11
 */
get_header();

if (have_posts()) : query_posts("cat=6" . '&paged=' . $paged);
    ?>
    <section id="main-content">

        <div class="row">
            <div class="large-12 medium-12 small-12 columns">
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
                                    <div class="fb1-click" style="display: inline;position: relative">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/fb-blog.png" />
                                        <div class="fb-blog-hover" style=" display: none">                        
                                            <iframe style="border: none; overflow: hidden; height: 290px;" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FYanHuangme&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=212010222162676" height="240" width="320" frameborder="0" scrolling="no"></iframe>
                                        </div>
                                    </div>

                                    <div class="tw-click" style="display: inline;position: relative">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-blog.png" />
                                        <div class="tw-bottom-hover" style="display: none">
                                            <p>Follow me on Twitter!<br>
                                                <a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fyanhuangme.com%2F&amp;region=follow_link&amp;screen_name=YanHuangME&amp;tw_p=followbutton&amp;variant=2.0" target="_blank"><img src="http://yanhuangme.com/wp-content/uploads/2013/06/twitter.jpg" alt="twitter" width="144" height="20" class="alignnone size-full wp-image-1800"></a></p>
                                        </div>

                                    </div>

                                    <div class="print-link" style="display: inline;position: relative">
                                        <?php dynamic_sidebar('sidebar6'); ?>
                                    </div>
                                    <div class="news-letter" style="display: inline;position: relative">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/mail-blog.png" />
                                        <div class="news-letter-content" style="display: none">
                                            <?php dynamic_sidebar('sidebar7'); ?>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="row">
                <div class="large-3 medium-3 small-4 columns">
                    <div class="blog-left-section">
                        <form role="search" method="get" id="searchform" action="" >
                            <div class="row collapse">
                                <div class="small-12 columns searchwrapper">
                                    <input type="text" id="search" class="search-field" placeholder="" />
                                </div>                                
                            </div>
                        </form>
                        <div class="row collapse">
                            <div class="large-12 medium-12 small-12 columns">

                                <div class="categories-list">
                                    <?php dynamic_sidebar('sidebar2'); ?>

                                </div>

                                <div class="recent-posts">
                                    <?php dynamic_sidebar('sidebar3'); ?>                                    
                                </div>

                                <div class="archives-list">
                                    <?php dynamic_sidebar('sidebar4'); ?>                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="large-9 medium-9 small-8 columns">
                    <div class="blog-right-section">
                        <?php
                        while (have_posts()) : the_post();
                            //$num_of_slider_images = get_count_group('page_group_slider_image');
                            ?>
                            <div class="row">
                                <div class="large-12 small-12 columns">
                                    <h1 class="heading">
                                        <?php the_title() ?>
                                    </h1>
                                    <p class = "posting-date">
                                        Posted by The <?php the_author() ?> on <?php the_date() ?>

                                    </p>
                                    <p class = "thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </p>

                                    <?php the_content() ?>
                                    <?php if (comments_open()) : ?>
                                        <p><?php comments_popup_link('Post a comment!'); ?></p>

                                    <?php endif; // comments_open() ?>
                                </div>
                            </div>

                        <?php endwhile; /* rewind or continue if all posts have been fetched */
                        ?>

                        <div class="pagination-content">
                            <center>
                                <?php paginate(); ?>
                                <!--ul class="pagination">
                                    <li class="arrow unavailable"><a href="">Previous</a></li>
                                    <li class="current"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li class="unavailable"><a href="">&hellip;</a></li>
                                    <li><a href="">12</a></li>
                                    <li><a href="">13</a></li>
                                    <li class="arrow"><a href="">Next</a></li>
                                </ul-->
                            </center>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <?php
endif;
?>
<?php get_footer(); ?>