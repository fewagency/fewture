<?php

namespace fewture\frontend;

// No use in telling the world that we are running WordPress
remove_action('wp_head', 'wp_generator');

// Remove RSD link. Bring it back if the site should be editable using an app.
remove_action ('wp_head', 'rsd_link');

// Remove Windows Live Writer manifest
remove_action( 'wp_head', 'wlwmanifest_link');

// Hide admin bar in frontend
add_filter('show_admin_bar', '__return_false');

/**
 *
 */
function remove_recent_comments_style() {
  global $wp_widget_factory;
  remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', __NAMESPACE__ . '\\remove_recent_comments_style');

/**
 * Add some JS variables that may come in handy
 */
function add_js_vars() {

  $html = '<script>';
  $html .= 'var fewtureData = {};';
  $html .= 'fewtureData.baseUrl = \'' . get_bloginfo('wpurl') . '\';';
  $html .= 'fewtureData.templateDirectoryUri = \'' . get_template_directory_uri() . '\';';
  $html .= 'fewtureData.ajaxUrl = \'' . admin_url('admin-ajax.php') . '\';';
  $html .= '</script>';

  echo $html;


}
add_action('wp_footer', __NAMESPACE__ . '\\add_js_vars');