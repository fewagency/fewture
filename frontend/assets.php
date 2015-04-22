<?php

namespace fewture\assets;

/**
 * Enqueue any theme specific scripts here
 */
function enqueue_scripts() {

  wp_enqueue_script('html5shiv', \Roots\Sage\Assets\asset_path('scripts/html5shiv.js'), [], null, false);
  wp_enqueue_script('respond', \Roots\Sage\Assets\asset_path('scripts/respond.js'), [], null, false);

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts' );

/**
 *
 */
add_filter( 'script_loader_tag', function( $tag, $handle ) {

  /**
   * Add conditional tags for stuff only needed by old IE
   */
  if ( $handle === 'html5shiv' || $handle === 'respond' ) {
    $tag = "<!--[if lt IE 9]>$tag<![endif]-->";
  }
  return $tag;

}, 10, 2 );