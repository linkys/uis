<?php
/*
 Template Name: Visa Page
*/

global $post;

$visas = get_cfc_meta('visas_page_types');

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

    <!-- VISAS -->
    <?php if(!empty($visas)) : ?>
    <div class="visas">
        <div class="container">
            <h1><?php the_cfc_field('visa_page', 'visa_page_title', $post->ID) ?></h1>
            <p class="subtitle"><?php the_cfc_field('visa_page', 'visa_page_subtitle', $post->ID) ?></p>
            <div class="visa-list">
                <div class="visa-row">

                    <?php foreach ($visas as $item) : ?>
                        <div class="visa-col">
                            <div class="visa-item">
                                <div class="visa-img-line">
                                    <div class="visa-img for-img">
                                        <img src="<?php echo wp_get_attachment_image_src($item['visas_page_types_image'], 'full')[0] ?>" alt="">
                                    </div>
                                </div>
                                <div class="visa-descr">
                                    <p class="visa-title"><?php echo $item['visas_page_types_title'] ?></p>
                                    <div class="visa-text">
                                        <p><?php echo $item['visas_page_types_description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- VISAS END -->

<?php get_footer(); ?>