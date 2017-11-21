<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php wp_title("|",true, 'right'); ?> <?php if (!defined('WPSEO_VERSION')) { bloginfo('name'); } ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

</head>
<body>
<div class="wrapper">

    <?php if( get_query_var('pagename') != 'login') : ?>
    <!-- HEADER -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top_inner">
                    <div class="header-phone">
                        <?php
                        if(is_active_sidebar('header-phone')){
                            dynamic_sidebar('header-phone');
                        }
                        ?>
                    </div>
                    <div class="header-actions">
                        <?php if(is_user_logged_in()) : ?>
                            <a href="<?php echo wp_logout_url( home_url() ); ?>" class="login">
                                <i class="i-login"></i>
                                <span>Logout</span>
                            </a>
                        <?php else: ?>
                            <a href="/login" class="login">
                                <i class="i-login"></i>
                                <span>Login</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom_inner">
                    <div class="header-logo">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                    <div class="header-nav">
                        <nav class="nav">
                            <?php
                            if( has_nav_menu('primary') ) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'echo' => true,
                                    'items_wrap'      => '<ul class="nav-list">%3$s</ul>',
                                    'walker' => new HeaderMenuWalker()
                                ));
                            }
                            ?>
                        </nav>



                    </div>

                    <div class="mobile-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
<?php endif; ?>