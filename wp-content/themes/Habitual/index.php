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

if (have_posts()) :
    ?>
    <section id="main-content">
        <?php
        while (have_posts()) : the_post();
            $num_of_images = get_count_group('page_group_slider_image');
            $portfolio = get_post_meta(get_the_ID(), 'Portfolio', true );
            
            ?>
            <div class="row collapse">
                <div class="large-12 small-12 columns" id="home-slider">
                    <ul class="home-orbit" data-orbit data-options="animation:slide;
                        animation_speed:1000;
                        pause_on_hover:true;
                        animation_speed:500;
                        navigation_arrows:true;
                        timer: false;
                        swipe: false;
                        slide_number: false; 
                        bullets:false;">
                            <?php
                            for ($i = 1; $i <= $num_of_images; $i++) {
                                if (get('page_group_slider_image', $i) != null) {
                                    ?>

                                <li>
                                    <img src="<?php echo get('page_group_slider_image', $i); ?>"  alt="slide 1" />
                                    <div class="orbit-caption1 home-caption">
                                        <?php echo get('page_group_slider_caption', $i); ?>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>


            <?php
            $args = array(
                'posts_per_page' => 1,
                'offset' => 0,
                'category' => '',
                'orderby' => 'ID',
                'order' => 'DESC',
                'include' => "$portfolio",
                'exclude' => '',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'post_mime_type' => '',
                'post_parent' => '',
                'post_status' => 'publish',
                'suppress_filters' => true);
            $myposts = get_posts($args);
            global $more;    // Declare global $more (before the loop).

            foreach ($myposts as $post) : setup_postdata($post);
                $more = 0;
                $num_of_images2 = get_count_group('post_group_slider_image');
                
                ?>
                <div class="row collapse">
                    <div class="large-12 columns text-center">
                        <div class="portfolio-heading"><?php the_title() ?> Portfolio</div>
                    </div>
                </div>
                <div class="row collapse" id="home-bottom-slider">
                    <div class="large-12 columns">
                        <ul class="home-sub-orbit" data-orbit data-options="animation:slide;
                            animation_speed:1000;
                            pause_on_hover:true;
                            animation_speed:500;
                            navigation_arrows:true;
                            timer: false;
                            swipe: false;
                            slide_number: false; 
                            bullets:false;">                           
                            <?php
                            for ($i = 1; $i <= $num_of_images2; $i = $i+4) {
                                if (get('post_group_slider_image', $i) != null) {
                                    ?>
                                    
                                    <li> 
                                        <ul class="small-block-grid-4 large-block-grid-4">
                                            <li><img src="<?php echo get('post_group_slider_image', $i); ?>"  alt="slide 1" /></li>
                                            <li><img src="<?php echo get('post_group_slider_image', $i+1); ?>"  alt="slide 1" /></li>
                                            <li><img src="<?php echo get('post_group_slider_image', $i+2); ?>"  alt="slide 1" /></li>
                                            <li><img src="<?php echo get('post_group_slider_image', $i+3); ?>"  alt="slide 1" /></li>
                                        </ul>
                                    </li>    
                                    <?php
                                }
                            }
                            ?>


                        </ul>
                    </div>
                </div>

                <?php
            endforeach;
            wp_reset_postdata();
            ?>

        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    </section>
    <?php
endif;
?>
<?php get_footer(); ?>