<?php

namespace fewture\frontend\recaptcha;

/**
 * @link https://www.google.com/recaptcha/
 */

define('RECAPTCHA_SITE_KEY', '');
define('RECAPTCHA_SECRET_KEY', '');

/**
 * Registers the recaptcha script
 */
function register_script() {
  wp_register_script('google-recaptcha-script', 'https://www.google.com/recaptcha/api.js', array(), null, true);
}
add_action('init', __NAMESPACE__ . '\\register_script');

/**
 * Prints the recaptcha script if global var $fewture_add_recaptcha_script is set to true.
 */
function print_script() {

  // Set this global variable to true on any page that you want to include the recpatcha script on
  global $fewture_add_recaptcha_script;

  if($fewture_add_recaptcha_script === true) {
    wp_print_scripts('google-recaptcha-script');
  }

}
add_action('wp_footer', __NAMESPACE__ . '\\print_script');