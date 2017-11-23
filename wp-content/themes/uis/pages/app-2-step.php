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
                    <div class="progress-step progress-step_current">
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
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-1">Personal Information</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-2">Education & Training</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-3">Work Experience</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-4">Language Skills</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-5">Adaptability</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-6">Dependents</div>
                        <div class="tab-toggle tab-toggle_active" data-tab="equal-7">Optimization & Documents</div>
                        <div class="tab-toggle tab-toggle_disabled" data-tab="equal-8">Submission</div>
                    </div>
                    <div class="tabs-body">
                        <div class="tab-content " data-tab="equal-1"></div>
                        <div class="tab-content " data-tab="equal-2"></div>
                        <div class="tab-content " data-tab="equal-3"></div>
                        <div class="tab-content " data-tab="equal-4"></div>
                        <div class="tab-content " data-tab="equal-5"></div>
                        <div class="tab-content " data-tab="equal-6"></div>

                        <div class="tab-content tab-content_active" data-tab="equal-7">

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Upload IELTS Results</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                                                <mark>No file choosen</mark>
                                                <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Upload Education Certificate</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                                                <mark>No file choosen</mark>
                                                <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Upload Dependent’s ID’s</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                                                <mark>No file choosen</mark>
                                                <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Upload Police Check</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                                                <mark>No file choosen</mark>
                                                <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="app-row">
                                <div class="app-col">
                                    <div class="app-form-group">
                                        <label class="app-form-label">Upload Medical Test</label>
                                        <div class="app-file-group">
                                            <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                                                <mark>No file choosen</mark>
                                                <input type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-content" data-tab="equal-8"></div>
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