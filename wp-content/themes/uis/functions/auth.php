<?php

function show_register_form() {
    if(!is_user_logged_in()) {
        echo '<div class="form-wrap"><form class="register_form" action="' . esc_url(admin_url('admin-post.php')) . '" method="post">
                        <p class="form-title">Take the first step towards your Canadian Visa</p>

                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Full name" name="username" required>
                            <p class="error-message"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-text" placeholder="Email" name="email" required>
                            <p class="error-message"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Phone number" name="phone" required>
                            <p class="error-message"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-text" placeholder="Country" name="country" required>
                            <p class="error-message"></p>
                        </div>
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" name="confirmation">
                                <span class="checkmark"></span>
                                I agree with the terms of use & privacy policy
                            </label>
                            <p class="error-message"></p>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="action" value="register_user">
                            ' . wp_nonce_field('submit_registration') . '
                            <button class="btn">Get Started Now!</button>
                        </div>
                    </form></div>';
    }
}

function register_user() {

    if ( !isset( $_POST['_wpnonce'] ) || !wp_verify_nonce( $_POST['_wpnonce'], 'submit_registration' ) || is_user_logged_in() ) {
        exit;
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $confirmation = isset($_POST['confirmation']) && $_POST['confirmation'] == 'on' ? true : false;

    $errors = [];

    if($username == '') {
        $errors['username'] = 'This field is required';
    }
    if($email == '') {
        $errors['email'] = 'This field is required';
    } elseif(email_exists($email)) {
        $errors['email'] = 'This email already exists';
    }
    if($phone == '') {
        $errors['phone'] = 'This field is required';
    }
    if($country == '') {
        $errors['country'] = 'This field is required';
    }
    if(!$confirmation) {
        $errors['confirmation'] = 'This checkbox is required';
    }

    if(empty($errors)) {

        $user_id = wp_insert_user(array(
            'user_pass' => wp_generate_password(),
            'user_login' => $email,
            'user_email' => $email,
            'display_name' => $username,
        ));

        if($user_id) {
            update_user_meta( $user_id, 'phone', $phone );
            update_user_meta( $user_id, 'country', $country );

            wp_send_json(array(
                'result' => true
            ));
        } else {
            wp_send_json(array(
                'result' => false
            ));
        }

    } else {
        wp_send_json(array(
            'result' => false,
            'errors' => $errors
        ));
    }

}
add_action( 'admin_post_nopriv_register_user', 'register_user' );
add_action( 'admin_post_register_user', 'register_user' );




function login_user() {

    if ( !isset( $_POST['_wpnonce'] ) || !wp_verify_nonce( $_POST['_wpnonce'], 'submit_login' ) || is_user_logged_in() ) {
        exit;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = wp_signon(array(
        'user_login' => $email,
        'user_password' => $password,
        'remember' => true,
    ));

    if ( is_wp_error($user) ) {
        $errors['password'] = 'Wrong data.';

        wp_send_json(array(
            'result' => false,
            'errors' => $errors
        ));
    } else {
        wp_send_json(array(
            'result' => true,
            'redirect_url' => site_url('/personal-application')
        ));
    }

}
add_action( 'admin_post_nopriv_login_user', 'login_user' );
add_action( 'admin_post_login_user', 'login_user' );

if($_SERVER['REQUEST_URI'] == '/login/' && is_user_logged_in()) {
    wp_redirect( site_url());
    exit;
}
if($_SERVER['REQUEST_URI'] == '/personal-application/' && !is_user_logged_in()) {
    wp_redirect( site_url());
    exit;
}