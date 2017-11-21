<?php
/*
 Template Name: Contact Page
*/

global $post;


get_header(); ?>

    <!-- MAP -->
    <div class="map-wrap">
        <?php echo do_shortcode('[wpgmza id="1"]') ?>
    </div>


    <!-- MAP END -->

    <!-- CONTACT US -->
    <div class="contact-us">
        <div class="container">
            <h1 class="text-left">Contact us</h1>
            <div class="contact-wrap clearfix">
                <div class="contact-col">
                    <?php
                    if(is_active_sidebar('contact-us')){
                        dynamic_sidebar('contact-us');
                    }
                    ?>
                </div>
                <div class="contact-col">
                    <div class="contact-block contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="138" title="Contact form 1"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT US END -->

<?php get_footer(); ?>