<footer id="footer">
    <div class="footer">
        <div class="row collapse">
            <div class="large-12 small-12 columns text-center">
                <div class="return-top"><a href="#header">RETURN TO TOP</a></div>
            </div>
        </div>
        <div class="row collapse footernav">
            <div class="large-2 small-3 columns text-left">
                © 2014 Habitual. 
            </div>
            <div class="large-8 small-8 columns">
                <?php wp_nav_menu(array('theme_location' => 'footernav', 'menu_class' => 'menu', 'menu_id' => 'nav')); ?> 
                <!--ul class="menu">
                    <li><a href="#">Shop</a>  </li>
                    <li><a href="#">  About</a></li>
                    <li><a href="#">Stockist</a>  </li>
                    <li><a href="#">Contact</a></li>
                </ul-->
            </div>
            <div class="large-2 small-2 columns text-right">
                Credits
            </div>
        </div>
        <div class="row collapse">
            <div class="large-12 small-12 columns text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/img/social.png" alt="Social Icons" />
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<?php wp_footer(); ?>
</body>
</html>
