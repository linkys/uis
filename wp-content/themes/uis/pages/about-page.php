<?php
/*
 Template Name: About Page
*/

global $post;

get_header(); ?>

    <!-- BUNNER -->
    <div class="bunner-wrap">
        <div class="bunner-img full-img">
            <?php echo get_the_post_thumbnail($post->ID) ?>
        </div>

        <div class="static-block static-block_sm">
            <div class="container">
                <div class="form-wrap">
                    <form>
                        <p class="form-title">Take the first step towards your Canadian Visa</p>

                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Full name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                I agree with the terms of use & privacy policy
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="btn">Get Started Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- BUNNER END -->

    <!-- ABOUT US -->
    <div class="about-us">
        <div class="container">
            <h1 class="text-left">About us</h1>

            <div class="team"><!-- DESIGN OT READY --></div>

            <div class="services">
                <div class="services-col">
                    <?php echo $post->post_content; ?>
                    <a href="#" class="btn btn-lg m-4">GEt Started Now!</a>
                </div>
                <div class="services-col services-col-img">
                    <div class="for-img clearfix">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/service-man.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-step">
        <div class="container">
            <div class="about-step-inner">
                <div class="single-step">
                    <div class="single-step-icon for-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/register_icon-white.png" alt="">
                    </div>
                    <div class="single-step-text">
                        <div class="single-step-nubmer">Step 1</div>
                        <div class="single-step-title">Register & Evaluate</div>
                    </div>
                </div>
                <div class="step-sep for-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/assets/right-arrow.png" alt="">
                </div>
                <div class="single-step">
                    <div class="single-step-icon for-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/prepare_icon-white.png" alt="">
                    </div>
                    <div class="single-step-text">
                        <div class="single-step-nubmer">Step 2</div>
                        <div class="single-step-title">Prepare & Optimize</div>
                    </div>
                </div>
                <div class="step-sep for-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/assets/right-arrow.png" alt="">
                </div>
                <div class="single-step">
                    <div class="single-step-icon for-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/submit_icon-white.png" alt="">
                    </div>
                    <div class="single-step-text">
                        <div class="single-step-nubmer">Step 3</div>
                        <div class="single-step-title">Submit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US END -->

<?php get_footer(); ?>