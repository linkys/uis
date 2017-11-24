<form action="<?php echo esc_url( admin_url('admin-post.php') ) ?>" method="post">

    <div class="depends-holder">
        <?php for($i = 1; $i <= 22; $i++) : ?>
            <div class="app-row" <?php echo $i > $tab_1['children'] ? 'style="display:none"' : '' ?>>
                <div class="app-col app-col-5th">
                    <div class="app-form-group">
                        <label class="app-form-label">First name</label>
                        <input type="text" class="app-form-text" name="depends[<?php echo $i ?>][firstName]" value="<?php echo isset($tab_6['depends'][$i]['firstName']) ? $tab_6['depends'][$i]['firstName'] : '' ?>">
                    </div>
                </div>
                <div class="app-col app-col-5th">
                    <div class="app-form-group">
                        <label class="app-form-label">Last name</label>
                        <input type="text" class="app-form-text" name="depends[<?php echo $i ?>][lastName]" value="<?php echo isset($tab_6['depends'][$i]['lastName']) ? $tab_6['depends'][$i]['lastName'] : '' ?>">
                    </div>
                </div>
                <div class="app-col app-col-5th">
                    <div class="app-form-group">
                        <label class="app-form-label">Date of birth</label>
                        <div class="input-icon">
                            <input type="text" class="app-form-text datepicker" placeholder="dd / mm / yyyy" name="depends[<?php echo $i ?>][dob]" value="<?php echo isset($tab_6['depends'][$i]['dob']) ? $tab_6['depends'][$i]['dob'] : '' ?>">
                            <i class="i-calendar"></i>
                        </div>
                    </div>
                </div>
                <div class="app-col app-col-5th"></div>
                <div class="app-col app-col-5th"></div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="app-footer-inner clearfix">
        <a href="#" class="app-footer-btn next-tab-btn">Next</a>
    </div>

    <input type="hidden" name="action" value="application_save_tab">
    <input type="hidden" name="tab" value="6">
    <?php echo wp_nonce_field( 'submit_application_save_tab' ) ?>
</form>