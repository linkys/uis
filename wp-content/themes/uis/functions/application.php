<?php

function application_save_tab() {

    if ( !isset( $_POST['_wpnonce'] ) || !wp_verify_nonce( $_POST['_wpnonce'], 'submit_application_save_tab' ) || !is_user_logged_in() ) {
        exit;
    }

    $data = $_POST;

    $tab = $data['tab'];

    unset($data['tab']);
    unset($data['action']);
    unset($data['_wpnonce']);
    unset($data['_wp_http_referer']);

    $errors = [];

    switch ($tab) {
        case 1:
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
            break;

        case 2:
            if($data['programType'] == '') {
                $errors['programType'] = 'This field is required';
            }
            if($data['programDuration'] == '') {
                $errors['programDuration'] = 'This field is required';
            }
            if($data['studyField'] == '') {
                $errors['studyField'] = 'This field is required';
            }
            if($data['studyCountry'] == '') {
                $errors['studyCountry'] = 'This field is required';
            }
            if($data['education'] == '') {
                $errors['education'] = 'This field is required';
            }
            if($data['educationYears'] == '') {
                $errors['educationYears'] = 'This field is required';
            }
            break;

        case 3:

            if($data['work-1'] == '') {
                $errors['work-1'] = 'This field is required';
            }
            if($data['work-2'] == '') {
                $errors['work-2'] = 'This field is required';
            }
            if($data['work-3'] == '') {
                $errors['work-3'] = 'This field is required';
            }
            if($data['estimatedWorth'] == '') {
                $errors['estimatedWorth'] = 'This field is required';
            }
            if($data['transferMoney'] == '') {
                $errors['transferMoney'] = 'This field is required';
            }
            break;

        case 4:

            if($data['englishLevel'] == '') {
                $errors['englishLevel'] = 'This field is required';
            }
            if($data['frenchLevel'] == '') {
                $errors['frenchLevel'] = 'This field is required';
            }
            if($data['englishReadingLevel'] == '') {
                $errors['englishReadingLevel'] = 'This field is required';
            }
            if($data['englishListeningLevel'] == '') {
                $errors['englishListeningLevel'] = 'This field is required';
            }
            if($data['englishWritingLevel'] == '') {
                $errors['englishWritingLevel'] = 'This field is required';
            }
            if($data['englishSpeakingLevel'] == '') {
                $errors['englishSpeakingLevel'] = 'This field is required';
            }
            if($data['frenchReadingLevel'] == '') {
                $errors['frenchReadingLevel'] = 'This field is required';
            }
            if($data['frenchListeningLevel'] == '') {
                $errors['frenchListeningLevel'] = 'This field is required';
            }
            if($data['frenchWritingLevel'] == '') {
                $errors['frenchWritingLevel'] = 'This field is required';
            }
            if($data['frenchSpeakingLevel'] == '') {
                $errors['frenchSpeakingLevel'] = 'This field is required';
            }
            break;

        case 5:

            if($data['adaptability-1'] == '') {
                $errors['adaptability-1'] = 'This field is required';
            }
            if($data['adaptability-2'] == '') {
                $errors['adaptability-2'] = 'This field is required';
            }
            if($data['adaptability-3'] == '') {
                $errors['adaptability-3'] = 'This field is required';
            }
            if($data['adaptability-4'] == '') {
                $errors['adaptability-4'] = 'This field is required';
            }
            if($data['adaptability-5'] == '') {
                $errors['adaptability-5'] = 'This field is required';
            }
            if($data['adaptability-4'] != 'I do not have a spouse') {
                if ($data['partnerDegree'] == '') {
                    $errors['partnerDegree'] = 'This field is required';
                }
                if ($data['partnerEducationYears'] == '') {
                    $errors['partnerEducationYears'] = 'This field is required';
                }
            }
            if($data['partnerEnglishReading'] == '') {
                $errors['partnerEnglishReading'] = 'This field is required';
            }
            if($data['partnerEnglishListening'] == '') {
                $errors['partnerEnglishListening'] = 'This field is required';
            }
            if($data['partnerEnglishWriting'] == '') {
                $errors['partnerEnglishWriting'] = 'This field is required';
            }
            if($data['partnerEnglishSpeaking'] == '') {
                $errors['partnerEnglishSpeaking'] = 'This field is required';
            }
            if($data['partnerFrenchReading'] == '') {
                $errors['partnerFrenchReading'] = 'This field is required';
            }
            if($data['partnerFrenchListening'] == '') {
                $errors['partnerFrenchListening'] = 'This field is required';
            }
            if($data['partnerFrenchWriting'] == '') {
                $errors['partnerFrenchWriting'] = 'This field is required';
            }
            if($data['partnerFrenchSpeaking'] == '') {
                $errors['partnerFrenchSpeaking'] = 'This field is required';
            }
            if($data['partnerFamily'] == '') {
                $errors['partnerFamily'] = 'This field is required';
            }
            break;

        case 6:

//            foreach($data['depends'] as $key => $item) {
//                if($item['firstName'] == '') {
//                    $errors['depends['.$key.']firstName'] = 'This field is required';
//                }
//                if($item['lastName'] == '') {
//                    $errors['depends['.$key.']lastName'] = 'This field is required';
//                }
//                if($item['dob'] == '') {
//                    $errors['depends['.$key.']dob'] = 'This field is required';
//                }
//            }
    }

    if(empty($errors)) {

        update_user_meta(get_current_user_id(), 'tab_'.$tab, serialize($data));

        wp_send_json(array(
            'result' => true
        ));

    } else {
        wp_send_json(array(
            'result' => false,
            'errors' => $errors
        ));
    }

}
add_action( 'admin_post_nopriv_application_save_tab', 'application_save_tab' );
add_action( 'admin_post_application_save_tab', 'application_save_tab' );