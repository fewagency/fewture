<?php

/**
 * Require or include this file to get access to the fewture
 */

$template_dir = get_template_directory();

$fewture_lib_path = $template_dir . '/fewture/';

$fewture_includes = [
  $fewture_lib_path . 'helpers.php',
  $fewture_lib_path . 'functions.php'
];

if(is_admin()) { // Backend

  $fewture_backend_lib_path = $fewture_lib_path  . 'backend/';

  $fewture_includes[] = $fewture_backend_lib_path . 'functions.php';
  $fewture_includes[] = $fewture_backend_lib_path . 'helpers.php';

} else { // Frontend

  $fewture_frontend_lib_path = $fewture_lib_path  . 'frontend/';

  $fewture_includes[] = $fewture_frontend_lib_path . 'helpers.php';
  $fewture_includes[] = $fewture_frontend_lib_path . 'functions.php';
  $fewture_includes[] = $fewture_frontend_lib_path . 'recaptcha.php';
  $fewture_includes[] = $fewture_frontend_lib_path . 'assets.php';

}

// Loop the files we want
foreach ($fewture_includes as $file) {

  require($file);

}