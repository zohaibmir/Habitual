<?php
/* Developer: Zohaib
 * CompanyName: DING
 * Date: 2014-02-11 
 */
//require_once 'Browser.php';
//remove_filter('the_content', 'wpautop'); Disaple Wordpress Auto tags
add_filter('admin_footer_text', 'habitual_custom_admin_footer');

function habitual_custom_admin_footer() {
    echo '<span id="footer-thankyou">Developed by <a href="se.linkedin.com/in/zohaibmir/" target="_blank">Zohaib Mir</a></span>.';
}

/* * *********** THUMBNAIL SIZE OPTIONS ************ */

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}
set_post_thumbnail_size(768, 400);
// Set content width
if (!isset($content_width))
    $content_width = 580;
// Thumbnail sizes
add_image_size('hg-desktop-slider', 768, 9999);
add_image_size('hg-phone-slider', 480, 9999);

function habitual_register_sidebars() {
    register_sidebar(array(
        'name' => __('Search Widget', 'frii'),
        'id' => 'sidebar1',
        'description' => __('', 'frii'),
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'id' => 'sidebar2',
        'name' => 'Category',
        'description' => '',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'id' => 'sidebar3',
        'name' => 'Recent Posts',
        'description' => '',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    
    register_sidebar(array(
        'id' => 'sidebar4',
        'name' => 'Archives',
        'description' => '',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    /*
      to add more sidebars or widgetized areas, just copy
      and edit the above sidebar code. In order to call
      your new sidebar just use the following code:

      Just change the name to whatever your new
      sidebar's id is, for example:



      To call the sidebar in your template, you can just copy
      the sidebar.php file and rename it to your sidebar's name.
      So using the above example, it would be:
      sidebar-sidebar2.php

     */
}

add_action('widgets_init', 'habitual_register_sidebars');

/*
 *  Add Meta tags in the header
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */

function meta_tags_in_head() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
    echo '<link rel="profile" href="http://gmpg.org/xfn/11" />';
}

add_action('wp_head', 'meta_tags_in_head');


/*
 *  Add Style sheets
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */

function theme_styles() {
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_register_style('app', get_template_directory_uri() . '/stylesheets/app.css', array(), '1.0', 'all');
    wp_enqueue_style('style');
    wp_enqueue_style('app');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

    wp_deregister_script('jquery'); // initiate the function    
    wp_register_script('modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js');
    wp_enqueue_script('modernizr');
}

add_action('wp_enqueue_scripts', 'theme_js');


/*
 *  Add Favicon
 *  Date: 2013-03-07
 *  Developer: Zohaib
 */

function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
}

add_action('wp_head', 'blog_favicon');


/*
 *  Stop Update Notifications on admin side
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */

function no_update_notification() {
    remove_action('load-update-core.php', 'wp_update_plugins');
    add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));
    if (!current_user_can('activate_plugins'))
        remove_action('admin_notices', 'update_nag', 3);
}

add_action('admin_notices', 'no_update_notification', 1);

/*
 *  Remove unnecessary dashboard widgets
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
// do not remove "Right Now" for administrators
    if (!current_user_can('activate_plugins')) {
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    }
// remove widgets for everyone
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

/*
 *  This Function return the Breadcumb
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */

function get_breadcrumb() {

    global $post;

    $trail = '';
    $page_title = get_the_title($post->ID);

    if ($post->post_parent) {
        $parent_id = $post->post_parent;

        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a> » ';
            $parent_id = $page->post_parent;
        }

        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            $trail .= $crumb;
    }

    $trail .= $page_title;
    $trail .= '';

    return $trail;
}

/*
 *  Register the Menu on the site (Primary Navigation is the site main top navigation)
 *  Date: 2014-02-11
 *  Developer: Zohaib
 */
register_nav_menus(array(
    'primary' => __('Primary Navigation', 'Habitual'),
));

// mainnav is used in all content pages

register_nav_menus(array(
    'mainnav' => __('Main Navigation', 'Habitual'),
));

register_nav_menus(array(
    'footernav' => __('Footer Navigation', 'Habitual'),
));

function new_excerpt_more($more) {
    return '<a href="' . get_permalink($post->ID) . '">' . 'Read more...' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

class My_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown\"><span class=\"arrow\"></span>\n";
    }

}

function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
	$pagination = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'list',
		'next_text' => 'Next',
		'prev_text' => 'Previous'
		);
	
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	
	echo paginate_links( $pagination );
}


if (!function_exists('twentytwelve_comment')) :

    /**
     * Template for comments and pingbacks.
     *
     * To override this walker in a child theme without modifying the comments template
     * simply create your own twentytwelve_comment(), and that function will be used instead.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     *
     * @since Twenty Twelve 1.0
     *
     * @return void
     */
    function twentytwelve_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' :
                // Display trackbacks differently than normal comments.
                ?>
                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                    <p><?php _e('Pingback:', 'twentytwelve'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('(Edit)', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?></p>
                    <?php
                    break;
                default :
                    // Proceed with normal comments.
                    global $post;
                    ?>
                <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                    <article id="comment-<?php comment_ID(); ?>" class="comment">
                        <header class="comment-meta comment-author vcard">
                            <?php
                            echo get_avatar($comment, 44);
                            printf('<cite><b class="fn">%1$s</b> %2$s</cite>', get_comment_author_link(),
                                    // If current post author is also comment author, make it known visually.
                                    ( $comment->user_id === $post->post_author ) ? '<span>' . __('Post author', 'twentytwelve') . '</span>' : ''
                            );
                            printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>', esc_url(get_comment_link($comment->comment_ID)), get_comment_time('c'),
                                    /* translators: 1: date, 2: time */ sprintf(__('%1$s at %2$s', 'twentytwelve'), get_comment_date(), get_comment_time())
                            );
                            ?>
                        </header><!-- .comment-meta -->

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'twentytwelve'); ?></p>
                        <?php endif; ?>

                        <section class="comment-content comment">
                            <?php comment_text(); ?>
                            <?php edit_comment_link(__('Edit', 'twentytwelve'), '<p class="edit-link">', '</p>'); ?>
                        </section><!-- .comment-content -->

                        <div class="reply">
                            <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply', 'twentytwelve'), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        </div><!-- .reply -->
                    </article><!-- #comment-## -->
                    <?php
                    break;
            endswitch; // end comment_type check
        }

    endif;
    ?>