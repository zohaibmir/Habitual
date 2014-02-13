<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();

if (have_posts()) :
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/fb-blog.png" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-blog.png" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/print-blog.png" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail-blog.png" />
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
                            <div class="large-12 small-12 columns">

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
                        <div class="row">
                            <div class="large-12 small-12 columns">
                                <header class="archive-header">
                                    <h1 class="heading"><?php printf(__('Category Archives: %s', 'twentytwelve'), '<span>' . single_cat_title('', false) . '</span>'); ?></h1>

                                    <?php if (category_description()) : // Show an optional category description  ?>
                                        <div class="archive-meta"><?php echo category_description(); ?></div>
    <?php endif; ?>
                                </header>
                            </div>
                        </div>
                        <br /><br />
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

        <?php endif; // comments_open()  ?>
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