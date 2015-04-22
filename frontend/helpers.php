<?php

namespace fewture\frontend\helpers;

/**
 * Get the name of the icon from Font Awesome that should be used for a file
 * @link http://fortawesome.github.io/Font-Awesome/
 * @param string $filename The name  or path of the file to find icon for.
 * @param mixed $attachment_id ID of an attachment to find icon for
 * @return mixed False if attahcment ind is passed and no attahment could be found. If icon was found,
 * a string is returned.
 */
function get_fa_file_icon_name($filename, $attachment_id = false) {

  $file_icon_class = false;

  if($attachment_id !== false) {

    $attachment_metadata = wp_get_attachment_metadata($attachment_id);

    if($attachment_metadata !== false) {
      $filename = $attachment_metadata['file'];
    }

  }

  if($filename !== false) {

    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file_icon_class = 'fa-file-o';

    switch ($file_extension) {

      case 'pdf' :

        $file_icon_class = 'fa-file-pdf-o';
        break;

      case 'jpg' :
      case 'jpeg' :
      case 'png' :
      case 'gif' :

        $file_icon_class = 'fa-file-pdf-o';
        break;

      case 'xls' :
      case 'xlsx' :

        $file_icon_class = 'fa-file-excel-o';
        break;

      case 'doc' :
      case 'docx' :

        $file_icon_class = 'fa-file-word-o';
        break;

      case 'ppt' :
      case 'pptx' :
      case 'pps' :
      case 'ppsx' :

        $file_icon_class = 'fa-file-powerpoint-o';
        break;

      case 'odt' :

        $file_icon_class = 'fa-file-text-o';
        break;

      case 'zip' :

        $file_icon_class = 'fa-file-archive-o';
        break;

      case 'mp4' :
      case 'm4v' :
      case 'mov' :
      case 'wmv' :
      case 'avi' :
      case 'mpg' :
      case 'ogv' :
      case '3gp' :
      case '3g2' :

        $file_icon_class = 'fa-file-movie-o';
        break;

      case 'mp3' :
      case 'm4a' :
      case 'ogg' :
      case 'wav' :

        $file_icon_class = 'fa-file-audio-o';
        break;

    }

  }

  return $file_icon_class;

}