<footer id="footer">
    <div class="footer">
        <div class="row collapse">      
            <div class="small-3 columns show-for-small-only text-left copyright">
                © 2014 Habitual. 
            </div>
            <div class="large-12 medium-12 small-6 columns text-center">
                <div class="return-top"><a href="#header">RETURN TO TOP</a></div>
            </div>
            <div class="small-3 columns show-for-small-only text-right credits copyright">
                CREDITS
            </div>   
        </div>
        <div class="row collapse footernav">
            <div class="large-2 small-3 columns text-left show-for-medium-up">
                © 2014 Habitual. 
            </div>
            <div class="large-8 small-12 columns">
                <?php wp_nav_menu(array('theme_location' => 'footernav', 'menu_class' => 'menu', 'menu_id' => 'nav')); ?> 

            </div>
            <div class="large-2 small-2 columns text-right credits show-for-medium-up">
                CREDITS
            </div>
        </div>

        <div class="row collapse">

            <div class="large-12 small-12 columns text-center">               
                <span data-tooltip class="has-tip tip-top" title="Please Share your experience with your friends on FB!"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png" alt="FB" /></span>
                <span data-tooltip class="has-tip tip-top" title="Please Share your experience with your friends on Twitter!"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter" /></span>
                <span data-tooltip class="has-tip tip-top" title="Please Share your experience with your friends!"><img src="<?php echo get_template_directory_uri(); ?>/img/p-icon.png" alt="Print" /></span>
                <span data-tooltip class="has-tip tip-top" title="Please Share your experience with your friends!"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="Email" /></span>

            </div>             
        </div>
    </div>
</footer>

<div id="myModal" class="reveal-modal small" data-reveal>
    <img src="" id="popup-img" alt="Pop Up" />

    <a class="close-reveal-modal">&#215;</a>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
