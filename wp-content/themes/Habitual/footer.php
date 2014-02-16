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
                 <span class="credit-text"> CREDITS</span>
                <a href="http://www.grayhatweb.com/" class="credit-img" style="display: none">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/credits.png" style="position: relative;top: -10px" title="Los Angeles web design" />
                </a>
            </div>   
        </div>
        <div class="row collapse footernav">
            <div class="large-2 small-3 columns text-left show-for-medium-up copyright1">
                © 2014 Habitual. 
            </div>
            <div class="large-8 small-12 columns">
                <?php wp_nav_menu(array('theme_location' => 'footernav', 'menu_class' => 'menu', 'menu_id' => 'nav')); ?> 

            </div>
            <div class="large-2 small-2 columns text-right credits show-for-medium-up">
                <span class="credit-text"> CREDITS</span>
                <a href="http://www.grayhatweb.com/" class="credit-img" style="display: none">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/credits.png" style="position: relative;top: -10px" title="Los Angeles web design" />
                </a>
            </div>
        </div>

        <div class="row collapse">

            <div class="large-12 small-12 columns text-center">               
                <div class="fb-click" style="display: inline;position: relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.png" alt="FB" />
                    <div class="fb-bottom-hover" style=" display: none">                        
                        <iframe style="border: none; overflow: hidden; height: 290px;" src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FYanHuangme&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=212010222162676" height="240" width="320" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>

                <div class="tw-click" style="display: inline;position: relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter" />
                    <div class="tw-bottom-hover" style="display: none">
                        <p>Follow me on Twitter!<br>
                            <a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fyanhuangme.com%2F&amp;region=follow_link&amp;screen_name=YanHuangME&amp;tw_p=followbutton&amp;variant=2.0" target="_blank"><img src="http://yanhuangme.com/wp-content/uploads/2013/06/twitter.jpg" alt="twitter" width="144" height="20" class="alignnone size-full wp-image-1800"></a></p>
                    </div>

                </div>
                <div class="print-link" style="display: inline;position: relative">
                    <?php dynamic_sidebar('sidebar5'); ?>
                </div>
                <div class="news-letter" style="display: inline;position: relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="Email" />
                    <div class="news-letter-content" style="display: none">
                        <?php dynamic_sidebar('sidebar7'); ?>
                    </div>
                </div>
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
