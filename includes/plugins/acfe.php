<?php

// ACF Extended - Disabling modules
// =============================================================================
if ( !function_exists( 'cx_acfe_modules' ) ) {
    add_action('acfe/init', 'cx_acfe_modules');
    function cx_acfe_modules(){
        
        // disable modules
        acfe_update_setting('modules/author',           false);
        acfe_update_setting('modules/categories',       false);
        acfe_update_setting('modules/block_types',      false);
        acfe_update_setting('modules/forms',            false);
        acfe_update_setting('modules/options_pages',    false);
        acfe_update_setting('modules/post_types',       false);
        acfe_update_setting('modules/taxonomies',       false);
        acfe_update_setting('modules/multilang',        false);
        acfe_update_setting('modules/options',          false);
        acfe_update_setting('modules/performance',      false);
        acfe_update_setting('modules/ui',               false);
        
    }
}
