<?php

namespace fewture\backend\functions;

/**
 * Custom Admin scripts
 */
function admin_scripts() {

  wp_enqueue_script( 'fewture-admin-js', get_template_directory_uri() . '/fewture/backend/assets/js/admin.js', ['jquery'], '1.0.0' );
  wp_enqueue_script( 'fewture-project-js', get_template_directory_uri() . '/fewture/backend/assets/js/project.js', ['jquery'], '1.0.0' );

  wp_enqueue_style( 'fewture-admin-css', get_template_directory_uri() . '/fewture/backend/assets/css/admin.css', [], '1.0.0' );
  wp_enqueue_style( 'fewture-project-css', get_template_directory_uri() . '/fewture/backend/assets/css/project.css', [], '1.0.0' );

}
add_action('admin_enqueue_scripts', __NAMESPACE__ . '\\admin_scripts');