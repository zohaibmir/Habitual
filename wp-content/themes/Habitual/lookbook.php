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

                        <div class="large-3 medium-3 small-12 columns text-right">
                            <h1 class="heading">
                                <?php the_title() ?>
                            </h1>
                        </div>
                        <div class="large-9 medium-9  small-12 columns text-right">
                            <div class="look-btn activebtn" id="Spring-2004">
                                Spring 2014
                            </div>
                            <div class="look-btn" id="Fall-2013">
                                Fall 2013
                            </div>
                            <div class="look-btn" id="Summer-2013">
                                Summer 2013
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'offset' => 0,
                    'category' => '5',
                    'orderby' => 'ID',
                    'order' => 'ASC',
                    'include' => "",
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
                $count = 1;
                foreach ($myposts as $post) : setup_postdata($post);
                    $more = 0;
                    $num_of_images2 = get_count_group('post_group_slider_image');
                    if ($count == 1) {
                        $classname = "spring2014";
                    } else if ($count == 2) {
                        $classname = "fall2013";
                    } else {
                        $classname = "summer2013";
                    }
                    ?>
                    <div class="row collapse <?php echo $classname ?>" id="lookbook-slider" <?= ($count == 1) ? 'style="display:block"' : 'style="display:none"' ?>>
                        <div class="large-12 columns">
                            <ul class="lookbook-orbit" data-orbit data-options="animation:slide;
                                timer_speed:3000;
                                pause_on_hover:true;
                                animation_speed:1000;
                                navigation_arrows:true;
                                timer: false;
                                swipe: true;
                                slide_number: false; 
                                bullets:false;
                                next_on_click:true;">
                                    <?php
                                    for ($i = 1; $i <= $num_of_images2; $i = $i + 6) {
                                        if (get('post_group_slider_image', $i) != null) {
                                            ?>

                                        <li> 
                                            <ul class="small-block-grid-3 look-book-ul medium-block-grid-3 large-block-grid-6">
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i + 1); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i + 1); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i + 2); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i + 2); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i + 3); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i + 3); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i + 4); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i + 4); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="reveal-link" data-reveal-id="myModal" data-reveal val="<?php echo get('post_group_slider_image', $i + 5); ?>">
                                                        <!--span class="roll"><span>ELLE IN MYSTERY</span> </span-->
                                                        <img src="<?php echo get('post_group_slider_image', $i + 5); ?>"  alt="slide 1" />
                                                    </a>
                                                </li>
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
                    $count++;
                endforeach;
                wp_reset_postdata();
                ?>

            </div>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    </section>
    <?php
endif;
?>

<?php get_footer(); ?>
