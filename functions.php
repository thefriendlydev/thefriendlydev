<?php

//-- Plugins --------------------------------------------------------------
// include_once 'plugins/advanced-custom-fields-pro/acf.php';
// include_once 'plugins/contact-form-7/wp-contact-form-7.php';
// include_once 'plugins/rest-api/plugin.php';

//-- Vendor ---------------------------------------------------------------

//-- WordPress Functuons --------------------------------------------------
require_once 'includes/wordpress/_init.php';

//-- Custom Post Type --------------------------------------------
require_once 'includes/post_types/testimonials.php';
require_once 'includes/post_types/projects.php';

//-- Custom Fields Definitions --------------------------------------------
require_once 'includes/custom_fields/_init.php';
require_once 'includes/custom_fields/options.php';
require_once 'includes/custom_fields/options-footer.php';

//-- Utils ----------------------------------------------------------------
require_once 'includes/utils/_init.php';

//-- Core App -------------------------------------------------------------


//-- Other -------------------------------------------------------------

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

function truncate($text, $chars = 25) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

define( 'WPCF7_AUTOP', false );

