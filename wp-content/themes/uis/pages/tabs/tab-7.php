<form action="<?php echo esc_url( admin_url('admin-post.php') ) ?>" method="post">

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

    <input type="hidden" name="action" value="application_save_tab">
    <input type="hidden" name="tab" value="7">
    <?php echo wp_nonce_field( 'submit_application_save_tab' ) ?>
</form>