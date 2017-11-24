<?php
/*
 Template Name: Terms Page
*/

global $post;

$facts = get_cfc_meta('canada_page_facts');
$quality = get_cfc_meta('canada_page_quality');

get_header(); ?>

    <!-- BUNNER -->
    <div class="terms-bunner bunner-wrap">
        <div class="bunner-img full-img">
            <?php echo get_the_post_thumbnail($post->ID) ?>
        </div>
    </div>
    <!-- BUNNER END -->

    <!-- TERMS -->
    <div class="terms">
        <div class="container">
            <h1 class="text-left text-white">Terms & Conditions</h1>
            <div class="terms-inner">
                <?php echo $post->post_content; ?>
            </div>


        </div>
    </div>
    <!-- TERMS END -->

<?php get_footer(); ?>