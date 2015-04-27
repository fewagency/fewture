<?php

namespace fewture;

/**
 * Functions that need to run on both frontend and backend
 */

/**
 * Setting cookie to indicate that cookies are ok.
 * This can not be placed in the frontend functions.
 */
function set_cookie() {

  echo (setcookie('fewture_cookies_okd', '1', time()+(60*60*24*100), '/') ? '1' : '0');
  die();

}
add_action('wp_ajax_fewture_cookies_okd', __NAMESPACE__ . '\\set_cookie');
add_action('wp_ajax_nopriv_fewture_cookies_okd', __NAMESPACE__ . '\\set_cookie');