</div>
<div class="footer_top_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer_top_content">
                <div class="grid_24 omega">
                    <div class="call_us">
                        <?php if (butterbelly_get_option('butterbelly_topright') != '') { ?>
                        <p>
                            <?php echo stripslashes(butterbelly_get_option('butterbelly_topright')); ?>
                        </p>
                        <?php } else {
                            ?>
                        <p>
                            <?php _e('For Reservation Call : 1.888.222.5847','butterbelly');?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer_container">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bottom_footer_container">
    <div class="container_24">
        <div class="grid_12">
            <div class="bottom_footer_content">
                <div class="copyrightinfo">
                    <?php $inkthemes_site_url='https://www.inkthemes.com/market/corporate-wordpress-theme/'; ?>
                    <p class="copyright">
                        <a href="<?php esc_url($inkthemes_site_url); ?>" rel="nofollow">
                            <?php _e('ButterBelly Theme','butterbelly');?> </a>
                        <?php _e('Powered By ','butterbelly');?>
                        <a href="http://www.wordpress.org">
                            <?php _e('WordPress','butterbelly');?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="grid_12 omega">
            <ul class="social_logos">
                <?php if (butterbelly_get_option('butterbelly_facebook') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_facebook')); ?>" title="Facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_twitter') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_twitter')); ?>" title="Twitter">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_yahoo') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_yahoo')); ?>" title="Yahoo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/yahoo.png" alt="Yahoo" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_rss') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_rss')); ?>" title="Rss Feed">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" alt="Digg Icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_digg') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_digg')); ?>" title="Digg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/digg.png" alt="Digg icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_pinterest') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_pinterest')); ?>" title="Pinterest">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" alt="Pinterest icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_linkedin') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_linkedin')); ?>" title="Pinterest">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/in.png" alt="Linkedin icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_instagram') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_instagram')); ?>" title="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_google') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_google')); ?>" title="Google">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/g+.png" alt="Google icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_youtube') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_youtube')); ?>" title="Youtube">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="Youtube icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_tumblr') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_tumblr')); ?>" title="Tumblr">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tumblr.png" alt="Tumblr icon" />
                    </a>
                </li>
                <?php } ?>
                <?php if (butterbelly_get_option('butterbelly_flickr') != '') { ?>
                <li>
                    <a href="<?php echo esc_url(butterbelly_get_option('butterbelly_flickr')); ?>" title="Flickr">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt="Flickr icon" />
                    </a>
                </li>
                <?php } ?>
            </ul>


        </div>
        <div class="clear"></div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>