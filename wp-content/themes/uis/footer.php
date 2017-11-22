<?php if( get_query_var('pagename') != 'login' && get_query_var('pagename') != 'personal-application') : ?>
<!-- SEO -->
<div class="seo">
    <div class="container">
        <?php
        if(is_active_sidebar('footer-headlines')){
            dynamic_sidebar('footer-headlines');
        }
        ?>
        <?php if(!is_front_page()) : ?>
        <div class="text-center">
            <a href="#" class="btn btn-lg">Get Started Now</a>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- SEO END -->

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top_inner">
                <div class="footer-logo">

                    <?php
                    if(is_active_sidebar('footer-sidebar-1')){
                        dynamic_sidebar('footer-sidebar-1');
                    }
                    ?>

                </div>
                <div class="footer-contact">
                    <?php
                    if(is_active_sidebar('footer-sidebar-2')){
                        dynamic_sidebar('footer-sidebar-2');
                    }
                    ?>
                </div>
                <div class="footer-menu">
                    <nav class="nav">

                        <?php
                        if( has_nav_menu('footer_menu') ) {
                            wp_nav_menu(array(
                                'theme_location' => 'footer_menu',
                                'container' => false,
                                'echo' => true,
                                'items_wrap'      => '<ul class="footer-nav">%3$s</ul>',
                                'walker' => new FooterMenuWalker()
                            ));
                        }
                        ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom_inner">
                <div class="footer-copy">
                    <p>Copyright &copy; <?php echo date("Y"); ?></p>
                </div>
                <div class="footer-social">
                    <div class="social-list">
                        <?php if(get_option('in_link')) : ?>
                        <a href="<?php echo get_option('in_link') ?>" target="_blank" class="social-link">
                            <i class="i-linkedin"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(get_option('inst_link')) : ?>
                        <a href="<?php echo get_option('inst_link') ?>" target="_blank" class="social-link">
                            <i class="i-instagram"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(get_option('gp_link')) : ?>
                        <a href="<?php echo get_option('gp_link') ?>" target="_blank" class="social-link">
                            <i class="i-g-plus"></i>
                        </a>
                        <?php endif; ?>
                        <?php if(get_option('fb_link')) : ?>
                        <a href="<?php echo get_option('fb_link') ?>" target="_blank" class="social-link">
                            <i class="i-facebook"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
<?php endif; ?>

</div>

<div class="hidden"></div>

<?php wp_footer() ?>

<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>