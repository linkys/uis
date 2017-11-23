<?php

global $post;

$tab_1 = unserialize(get_user_meta(get_current_user_id(), 'tab_1', true));
$tab_2 = unserialize(get_user_meta(get_current_user_id(), 'tab_2', true));
$tab_3 = unserialize(get_user_meta(get_current_user_id(), 'tab_3', true));
$tab_4 = unserialize(get_user_meta(get_current_user_id(), 'tab_4', true));

//echo "<pre>";
//print_r($tab_1);
//echo "</pre>";
//die;

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
                            <?php include "tabs/tab-1.php"; ?>
                        </div>

                        <div class="tab-content" data-tab="equal-2">
                            <?php include "tabs/tab-2.php"; ?>
                        </div>

                        <div class="tab-content" data-tab="equal-3">
                            <?php include "tabs/tab-3.php"; ?>
                        </div>

                        <div class="tab-content" data-tab="equal-4">
                            <?php include "tabs/tab-4.php"; ?>
                        </div>

                        <div class="tab-content" data-tab="equal-5">

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Do you or your spouse / common-law partner have at least 1 year of full-time Canadian work experience on a valid work permit?</label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="adaptability-1">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-1" checked>
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
                                        <label class="app-form-label">Did you or your spouse/common law partner study in Canada? </label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="adaptability-2">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-2" checked>
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
                                        <label class="app-form-label">Has your spouse/common-law partner completed high school (secondary school)?</label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="adaptability-3">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-3" checked>
                                                <span class="pseudo-radio"></span>
                                                No
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-3">
                                                <span class="pseudo-radio"></span>
                                                N/A
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Has your spouse/common-law partner done any education or training other than high school (secondary school)?</label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="adaptability-4">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-4" checked>
                                                <span class="pseudo-radio"></span>
                                                No
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-4">
                                                <span class="pseudo-radio"></span>
                                                I do not have a spouse
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-12">
                                    <div class="app-form-group">
                                        <label class="app-form-label">What is the highest degree or diploma that your spouse/common-law partner has completed after finishing high school</label>
                                        <div class="app-row">
                                            <div class="app-col app-col-6">
                                                <select>
                                                    <option value="High school diploma (secondary school)">High school diploma (secondary school)</option>
                                                    <option value="One year post-secondary credential">One year post-secondary credential</option>
                                                    <option value="Two year post-secondary credential">Two year post-secondary credential</option>
                                                    <option value="Two or more post-secondary credential, one of which is a three year or longer post-secondary credential">Two or more post-secondary credential, one of which is a three year or longer post-secondary credential</option>
                                                    <option value="Masters level or Professional degree">Masters level or Professional degree</option>
                                                    <option value="Doctorate level">Doctorate level</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-6">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Total years of spouse/common law partner education since grade 1?</label>
                                        <div class="app-form-text_sm">
                                            <input type="number" class="app-form-text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Has your spouse/ common-law partner completed (at least) 2 years of post-secondary education in Canada since reaching the age of 17? </label>
                                        <div class="app-radio-group">
                                            <label class="radio">
                                                <input type="radio" name="adaptability-5">
                                                <span class="pseudo-radio"></span>
                                                Yes
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-5" checked>
                                                <span class="pseudo-radio"></span>
                                                No
                                            </label>
                                            <br />
                                            <label class="radio">
                                                <input type="radio" name="adaptability-5">
                                                <span class="pseudo-radio"></span>
                                                I do not have a spouse
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-12">
                                    <p><strong>What is your spouse/common-law partner level of English?</strong></p>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Reading:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Listening:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Writing:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Speaking:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th"></div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-12">
                                    <p><strong>What is your spouse/common-law partner level of French?</strong></p>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Reading:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Listening:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Writing:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Speaking:</label>
                                        <select>
                                            <option value="Very high">Very high</option>
                                            <option value="High">High</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Not at all">Not at all</option>
                                            <option value="I do not have a spouse">I do not have a spouse</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th"></div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-10">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Do you or your spouse/common-law partner; have any family members living in Canada?</label>
                                        <div class="app-row">
                                            <div class="app-col app-col-6">
                                                <select>
                                                    <option value="No Family members in Canada">No Family members in Canada</option>
                                                    <option value="Parent">Parent</option>
                                                    <option value="Grandparent">Grandparent</option>
                                                    <option value="Child">Child</option>
                                                    <option value="Siblings">Siblings</option>
                                                    <option value="Aunt">Aunt</option>
                                                    <option value="Uncle">Uncle</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-content" data-tab="equal-6">

                            <div class="app-row">
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">First name</label>
                                        <input type="text" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Last name</label>
                                        <input type="text" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Date of birth</label>
                                        <div class="input-icon">
                                            <input type="text" class="app-form-text datepicker" placeholder="dd / mm / yyyy">
                                            <i class="i-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th"></div>
                                <div class="app-col app-col-5th"></div>
                            </div>

                            <div class="app-row">
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">First name</label>
                                        <input type="text" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Last name</label>
                                        <input type="text" class="app-form-text">
                                    </div>
                                </div>
                                <div class="app-col app-col-5th">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Date of birth</label>
                                        <div class="input-icon">
                                            <input type="text" class="app-form-text datepicker" placeholder="dd / mm / yyyy">
                                            <i class="i-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-col app-col-5th"></div>
                                <div class="app-col app-col-5th"></div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <a href="#" class="add">+ Add more dependentss</a>
                                </div>
                            </div>

                        </div>
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