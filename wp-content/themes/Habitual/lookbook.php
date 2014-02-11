<?php
/**
 * The LookBook Page template file
 *
 * This is the LookBook template file in a Habitual theme
 * and Used for the Look Page of the site
 *
 * Template Name: LookBook
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
    <div class="lookbook">
        <div class="lookbook-top">
            <div class="row collapse">

                <div class="large-3 small-12 columns text-right">
                    <h1 class="heading">
                        LOOK BOOK
                    </h1>
                </div>
                <div class="large-9  small-12 columns text-right">
                    <div class="look-btn activebtn">
                        Spring 2014
                    </div>
                    <div class="look-btn">
                        Fall 2013
                    </div>
                    <div class="look-btn">
                        Summer 2013
                    </div>
                </div>
            </div>
        </div>
        <div class="row collapse" id="lookbook-slider">
            <div class="large-12 columns">
                <ul class="lookbook-orbit" data-orbit data-options="animation:slide;
                    animation_speed:1000;
                    pause_on_hover:true;
                    animation_speed:500;
                    navigation_arrows:true;
                    timer: false;
                    swipe: false;
                    slide_number: false; 
                    bullets:false;">
                    <li data-orbit-slide="headline-1"> 
                        <ul class="small-block-grid-6 large-block-grid-6">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                        </ul>
                    </li>    

                    <li data-orbit-slide="headline-2"> 
                        <ul class="small-block-grid-6 large-block-grid-6">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                        </ul>
                    </li>    
                    <li data-orbit-slide="headline-3"> 
                        <ul class="small-block-grid-6 large-block-grid-6">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model1.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model2.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model3.png" /></li>                               
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model4.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model5.png" /></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/model6.png" /></li>
                        </ul>
                    </li>    

                    <li data-orbit-slide="headline-4"> 
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
    </div>
 <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
</section>
    <?php
endif;
?>
<?php get_footer(); ?>