<form action="<?php echo esc_url( admin_url('admin-post.php') ) ?>" method="post">

    <div class="app-row">
        <div class="app-col">
            <div class="app-form-group">
                <label class="app-form-label">Upload Retainer Agreement</label>
                <div class="app-file-group">
                    <label class="file_upload clearfix">
														<span class="button clearfix">
															Choose file
															<i class="i-upload"></i>
														</span>
                        <mark>No file choosen</mark>
                        <input type="file" name="retainer-agreement">
                        <input type="hidden" class="hidden-file" name="retainer-agreement-file">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="app-footer-inner clearfix">
        <a href="#" class="app-footer-btn next-tab-btn">Next</a>
    </div>

    <input type="hidden" name="action" value="application_save_tab">
    <input type="hidden" name="tab" value="8">
    <?php echo wp_nonce_field( 'submit_application_save_tab' ) ?>
</form>