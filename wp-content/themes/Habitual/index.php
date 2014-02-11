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

if (have_posts()) : ?>
<section id="main-content">
        <?php
        while (have_posts()) : the_post();
            //$num_of_slider_images = get_count_group('page_group_slider_image');
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
                <li data-orbit-slide="Slide-1"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.png" alt="First Slide" />   
                    <div class="orbit-caption">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-caption.png" />
                    </div>
                </li>    

                <li data-orbit-slide="Slide-2"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.png" alt="First Slide" />   
                    <div class="orbit-caption">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider-caption.png" />
                    </div>
                </li>    


            </ul>
        </div>
    </div>
    <div class="row collapse">
        <div class="large-12 columns text-center">
            <div class="portfolio-heading">2014 Spring Portfolio</div>
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
                <li> 
                    <ul class="small-block-grid-6 large-block-grid-6">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                    </ul>
                </li>    

                <li> 
                    <ul class="small-block-grid-6 large-block-grid-6">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                    </ul>
                </li>    
                <li> 
                    <ul class="small-block-grid-6 large-block-grid-6">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                    </ul>
                </li>    

                <li> 
                    <ul class="small-block-grid-6 large-block-grid-6">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                    </ul>
                </li>    




            </ul>
        </div>
    </div>


        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
</section>
    <?php
endif;
?>
<?php get_footer(); ?>