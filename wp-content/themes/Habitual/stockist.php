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

if (have_posts()) :;
    while (have_posts()) : the_post();
        $category1 = get_category(7);
        $category2 = get_category(8);
        $category3 = get_category(9);
        $category4 = get_category(10);
        $categories_ids = array();
        ?>
        <section id="main-content">

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
                    <div class="large-4 medium-4  small-5 columns">
                        <div class="stockist-list">
                            <div class="stocklist-category" id="parent<?php echo $category1->term_id; ?>">

                                <?php
                                echo $category1->name;
                                ?>
                            </div>
                            <?php
                            $categories = get_categories('child_of=7');
                            echo '<ul class="' . $category1->category_nicename . '">';
                            foreach ($categories as $category) {
                                $categories_ids[] = $category->term_id;
                                $option = '<li class="sub-cat" id="' . $category->category_nicename . '">';
                                $option .= $category->cat_name;
                                $option .= '</li>';
                                echo $option;
                            }
                            echo '</ul>';
                            ?>  
                            <div class="departments-category" id="parent<?php echo $category2->term_id; ?>">
                                <?php
                                echo $category2->name;
                                ?>
                            </div>
                            <?php
                            $categories = get_categories('child_of=8');
                            echo '<ul class="' . $category2->category_nicename . '">';
                            foreach ($categories as $category) {
                                $categories_ids[] = $category->term_id;
                                $option = '<li class="sub-cat" id="' . $category->category_nicename . '">';
                                $option .= $category->cat_name;
                                $option .= '</li>';
                                echo $option;
                            }
                            echo '</ul>';
                            ?>         

                            <div class="retailers-category" id="parent<?php echo $category3->term_id; ?>">
                                <?php
                                echo $category3->name;
                                ?>
                            </div>
                            <?php
                            $categories = get_categories('child_of=9');
                            echo '<ul class="' . $category3->category_nicename . '">';
                            foreach ($categories as $category) {
                                $categories_ids[] = $category->term_id;
                                $option = '<li class="sub-cat" id="' . $category->category_nicename . '">';
                                $option .= $category->cat_name;
                                $option .= '</li>';
                                echo $option;
                            }
                            echo '</ul>';
                            ?>         


                            <div class="international-category" id="parent<?php echo $category4->term_id; ?>">
                                <?php
                                echo $category4->name;
                                ?>
                            </div>
                            <?php
                            $categories = get_categories('child_of=10');
                            echo '<ul class="' . $category1->category_nicename . '">';
                            foreach ($categories as $category) {
                                $categories_ids[] = $category->term_id;
                                $option = '<li class="sub-cat" id="' . $category->category_nicename . '">';
                                $option .= $category->cat_name;
                                $option .= '</li>';
                                echo $option;
                            }
                            echo '</ul>';
                            ?>         
                        
                    </div>


                </div>

                <div class="large-8 medium-8 small-7 columns">
                    <div class="row" data-equalize>                           
                        <?php
                        $count = 1;
                        $countlistings = 1;
                        $args = array(
                            'offset' => 0,
                            'category__in' => $categories_ids,
                            'orderby' => 'ID',
                            'order' => 'ASC',
                            'include' => '',
                            'exclude' => '',
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post',
                            'post_mime_type' => '',
                            'post_parent' => '',
                            'post_status' => 'publish',
                            'posts_per_page' => 500,
                            'suppress_filters' => true);
                        $myposts = get_posts($args);


                        foreach ($myposts as $post) : setup_postdata($post);
                            $category = get_the_category();
                            $category_parent = $category[0]->category_parent;
                            $category_nicename = $category[0]->category_nicename;
                            $num_of_listings = get_count_group('post_group_listings_name');
                            for ($i = 1; $i <= $num_of_listings; $i++) {
                                ?>
                                <div class="large-4 medium-4 small-12 columns listings parent<?php echo $category_parent ?> <?php echo $category_nicename ?>" style="margin-bottom: 15px;float:left"  data-equalizer-watch>

                                    <div class="contact-info-box">
                                        <div class="info-box">
                                            <div class="box-heading">
                                                <?php echo get('post_group_listings_name', $i); ?>
                                            </div>
                                            <div class="box-content">
                                                <?php echo get('post_group_listings_details', $i); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>   
                                <?php
                                if ($countlistings % 3 == 0) {
                                    //echo '<div style="clear:both">&nbsp;</div>';
                                }
                                $countlistings++;
                            }
                            $count++;
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <?php
    endwhile; /* rewind or continue if all posts have been fetched */
    ?>
    </section>
    <?php
endif;
?>
<?php get_footer(); ?>