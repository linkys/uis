<?php
/*
 Template Name: Login Page
*/

global $post;

get_header(); ?>

    <!-- USER -->
    <div class="user">
        <div class="user-col user-col_bg"></div>
        <div class="user-col user-col_info">
            <a href="/" class="back-btn">< Back</a>
            <div class="user-wrap">
                <a href="#" class="user-logo for-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/assets/logo.png" alt="">
                </a>
                <form class="user-form">
                    <p class="user-title">User Login</p>
                    <p class="user-subtitle">Enter yout user name and password to login</p>
                    <div class="form-group">
                        <i class="i-user"></i>
                        <input type="text" class="form-text" placeholder="User name">
                    </div>
                    <div class="form-group">
                        <i class="i-password"></i>
                        <input type="password" class="form-text" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password">Forgot password?</a><br />
                        <button class="btn">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- USER END -->

<?php get_footer(); ?>