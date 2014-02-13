<!doctype html>
<html class="no-js" lang="en">
    <head>

        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>

        <style>
            html, body {
                margin: 0 !important;
                padding: 0 !important;
            }
            .appleLinks a {color:#000000;}
            .appleLinksWhite a {color:#ffffff;}
        </style>
    </head>
    <body>
        <header id="header">
            <div class="header-content">
                <div class="row collapse ">
                    <div class="small-12 large-12 columns">
                        <div class="top-section">
                            <div class="row">
                                <div class="small-4 large-4 columns">
                                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu', 'menu_id' => 'nav')); ?> 

                                </div>
                                <div class="small-3 large-4 text-center columns">
                                    <a href="<?php echo get_option('home'); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" />
                                    </a>
                                </div>
                                <div class=" small-5 large-4 columns text-right">
                                    <!--ul class="menu2">
                                        <li><a href="stockist.html">Stockist</a>  </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul-->
                                    <?php wp_nav_menu(array('theme_location' => 'mainnav', 'menu_class' => 'menu2', 'menu_id' => 'nav2')); ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </header>