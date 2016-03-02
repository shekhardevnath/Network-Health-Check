<?php
    // include the user class
    require_once(USER_CLASS);
    require_once(DOCUMENT_CLASS);

    /**#@+
    * PATH Constant
    */

    // defines the template and template path
    define('TEMPLATE_DIR',                 APP_CONTENTS_DIR     . '/' . CURRENT_APP_PREFIX);
    define('REL_TEMPLATE_DIR',             REL_APP_CONTENTS_DIR . '/' . CURRENT_APP_PREFIX);
    define('ATTACHMENT_DIR',               REL_APP_DIR . REL_DOCUMENTS_DIR .'/hc'); 
     
    /**#@+
    * Template Constant
    */
    define('HC_PORTAL_TEMPLATE', TEMPLATE_DIR . '/hc_portal.html');    
    define('HC_PORTAL_URL',      REL_APP_DIR . '/hc_portal/hc_portal.php');
    define('FEEDBACK_URL',       'http://10.7.44.66/nm_tx/hc_portal/hc_portal.php');
    
    define('STATUS_CHECK_ID',    '18');
?>