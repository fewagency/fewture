/**
 * Some stuff to improve the admin experience
 */

jQuery(document).ready(function() {

  // Have preview button open new window/tab
  jQuery('#view-post-btn a').attr('target', 'preview');

  // Add link to facebook image dimension recommendations in Yoast social.
  jQuery('[for="yoast_wpseo_opengraph-image"]').append('<br/><a href="http://goo.gl/U6wvMa" target="_blank">Recommendend image dimensions</a>');

});