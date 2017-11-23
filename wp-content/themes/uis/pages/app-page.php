<?php

global $post;

get_header(); ?>

    <div class="application bg-white">
        <div class="app-header">
            <div class="container-md">
                <div class="app-logo">
                    <a href="<?php echo home_url() ?>" class="logo for-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/assets/logo.png" alt="">
                    </a>
                </div>

                <div class="app-title">Personal Application</div>

                <div class="app-progress progress">
                    <div class="progress-step progress-step_current">
                        <div class="step-number">1</div>
                        <div class="step-title">Personal Information</div>
                    </div>
                    <div class="progress-step">
                        <div class="step-number">2</div>
                        <div class="step-title">Optimization and document collection</div>
                    </div>
                    <div class="progress-step">
                        <div class="step-number">3</div>
                        <div class="step-title">Submission</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-body">
            <div class="container-md">
                <div class="app-row">
                    <div class="app-col app-col-3 m-4">
                        <select class="select_grey">
                            <option value="Chose country">Chose Application</option>
                            <option value="Erez Friedmann">Erez Friedmann</option>
                            <option value="Ronnie Weiss ">Ronnie Weiss </option>
                        </select>
                    </div>
                </div>

                <div class="tabs-wrapper">
                    <div class="tabs-header">
                        <div class="tab-toggle tab-toggle_active" data-tab="equal-1">Personal Information</div>
                        <div class="tab-toggle" data-tab="equal-2">Education & Training</div>
                        <div class="tab-toggle" data-tab="equal-3">Work Experience</div>
                        <div class="tab-toggle" data-tab="equal-4">Language Skills</div>
                        <div class="tab-toggle" data-tab="equal-5">Adaptability</div>
                        <div class="tab-toggle" data-tab="equal-6">Dependents</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-7">Optimization & Documents</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-8">Submission</div>
                    </div>
                    <div class="tabs-body">
                        <div class="tab-content tab-content_active" data-tab="equal-1">

                            <form action="<?php echo esc_url( admin_url('admin-post.php') ) ?>" method="post">

                            <div class="app-row">
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">First name</label>
                                        <input type="text" name="firstName" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Middle name</label>
                                        <input type="text" name="middleName" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Last name</label>
                                        <input type="text" name="lastName" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Gender</label>
                                        <div class="app-radio-group app-radio-group-text">
                                            <label class="radio-text">
                                                <input type="radio" name="gender" value="female">
                                                <span>Female</span>
                                            </label>
                                            <label class="radio-text">
                                                <input type="radio" name="gender" value="male" checked>
                                                <span>Male</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Email Address</label>
                                        <input type="email" name="email" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">*Another email address</label>
                                        <input type="email" name="anotherEmail" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Phone number</label>
                                        <input type="text" name="phone" class="app-form-text">
                                        <a href="#" class="add">+ Add new phone</a>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Country of residence</label>
<!--                                        <select name="country">-->
<!--                                            <option value="0">Chose country</option>-->
<!--                                            <option value="country 1">country 1</option>-->
<!--                                            <option value="country 2">country 2</option>-->
<!--                                            <option value="country 3">country 3</option>-->
<!--                                        </select>-->
                                        <input type="text" name="country" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Street</label>
                                        <input type="text" name="street" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">City</label>
                                        <input type="text" name="city" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Zip code / Postal code</label>
                                        <input type="text" name="zipcode" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Date of birth</label>
                                        <div class="input-icon">
                                            <input type="text" name="dob" class="app-form-text datepicker">
                                            <i class="i-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Material status</label>
                                        <select name="material">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Legally Separated">Legally Separated</option>
                                            <option value="Common Law Partners">Common Law Partners</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-4">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Number of dependent childred under 22:</label>
                                        <select name="children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-6">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Criminal offences</label>
                                        <select name="criminal">
                                            <option value="You have never been convicted of any criminal offences">You have never been convicted of any criminal offences</option>
                                            <option value="You have been convicted in a criminal offence">You have been convicted in a criminal offence</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Have you or any of your immediate family had any serious health problems?</label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="health" value="Yes">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="health" value="No" checked>
                                                <span class="pseudo-radio"></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Please upload a clear Copy of your Passport ID Page:</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
                                                    <span class="button clearfix">
                                                        Choose file
                                                        <i class="i-upload"></i>
                                                    </span>
                                                <mark>No file choosen</mark>
                                                <input type="file" name="passportID">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Please Upload a Utility Bill (not older than 3 months)</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
                                                    <span class="button clearfix">
                                                        Choose file
                                                        <i class="i-upload"></i>
                                                    </span>
                                                <mark>No file choosen</mark>
                                                <input type="file" name="utilityBill">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-footer-inner clearfix">
                                <a href="#" class="app-footer-btn next-tab-btn">Next</a>
                            </div>

                            <input type="hidden" name="action" value="application_save_1_tab">
                            <?php echo wp_nonce_field( 'submit_application_save_1_tab' ) ?>

                            </form>

                        </div>


                        <div class="tab-content" data-tab="equal-2">Education & Training</div>
                        <div class="tab-content" data-tab="equal-3">Work Experience</div>
                        <div class="tab-content" data-tab="equal-4">Language Skills</div>
                        <div class="tab-content" data-tab="equal-5">Adaptability</div>
                        <div class="tab-content" data-tab="equal-6">Dependents</div>
                        <div class="tab-content" data-tab="equal-7">Optimization & Documents</div>
                        <div class="tab-content" data-tab="equal-8">Submission</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-footer">
            <div class="container-md">
                <div class="app-footer-inner clearfix">
                    <a href="#" class="app-footer-btn">
                        Save
                        <i class="i-download"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>