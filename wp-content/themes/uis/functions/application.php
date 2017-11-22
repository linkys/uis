<?php

function application_save_1_tab() {

    if ( !isset( $_POST['_wpnonce'] ) || !wp_verify_nonce( $_POST['_wpnonce'], 'submit_application_save_1_tab' ) || !is_user_logged_in() ) {
        exit;
    }

    /*
    *[firstName] =>
    [middleName] =>
    *[lastName] =>
    *[gender] => male
    *[email] =>
    [anotherEmail] =>
    *[phone] =>
    *[country] => 0
    *[street] =>
    *[city] =>
    *[zipcode] =>
    *[dob] =>
    *[material] => Single
    [children] => 0
    *[criminal] => You have never been convicted of any criminal offences
    *[health] => No
    [action] => application_save_1_tab
    [_wpnonce] => e55621b966
    [_wp_http_referer] => /personal-application/

     * */

    $data = $_POST;

    unset($data['action']);
    unset($data['_wpnonce']);
    unset($data['_wp_http_referer']);

    $errors = [];

    if($data['firstName'] == '') {
        $errors['firstName'] = 'This field is required';
    }
    if($data['lastName'] == '') {
        $errors['lastName'] = 'This field is required';
    }
    if($data['gender'] == '') {
        $errors['gender'] = 'This field is required';
    }
    if($data['email'] == '') {
        $errors['email'] = 'This field is required';
    }
    if($data['phone'] == '') {
        $errors['phone'] = 'This field is required';
    }
    if($data['country'] == '') {
        $errors['country'] = 'This field is required';
    }
    if($data['street'] == '') {
        $errors['street'] = 'This field is required';
    }
    if($data['city'] == '') {
        $errors['city'] = 'This field is required';
    }
    if($data['zipcode'] == '') {
        $errors['zipcode'] = 'This field is required';
    }
    if($data['dob'] == '') {
        $errors['dob'] = 'This field is required';
    }
    if($data['material'] == '') {
        $errors['material'] = 'This field is required';
    }
    if($data['criminal'] == '') {
        $errors['criminal'] = 'This field is required';
    }
    if($data['health'] == '') {
        $errors['health'] = 'This field is required';
    }

    if(empty($errors)) {



    } else {
        wp_send_json(array(
            'result' => false,
            'errors' => $errors
        ));
    }

}
add_action( 'admin_post_nopriv_application_save_1_tab', 'application_save_1_tab' );
add_action( 'admin_post_application_save_1_tab', 'application_save_1_tab' );